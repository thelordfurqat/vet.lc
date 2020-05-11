<?php

namespace app\controllers;

use app\models\Appeals;
use app\models\Category;
use app\models\News;
use app\models\Page;
use app\models\Vote;
use app\models\VoteAns;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\NotFoundHttpException;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $latest_new=News::find()->where(['cat_id'=>13])->orderBy(['created'=>SORT_DESC])->one();
        $news=News::find()->where(['<>','cat_id',25])->orderBy(['created'=>SORT_DESC])->limit(9)->all();
        $photo_album=News::find()->where(['cat_id'=>25])->orderBy(['show_counter'=>SORT_DESC])->limit(3)->all();
        $most_viewed_posts=News::find()->orderBy(['created'=>SORT_DESC])->limit(7)->all();
        $category_for_slider=Category::find()->where(['parent_id'=>12])->limit(3)->all();
        return $this->render('index',[
            'news'=>$news,

            'latest_new'=>$latest_new,
            'photo_album'=>$photo_album,
            'category_for_slider'=>$category_for_slider,
            'most_viewed_posts'=>$most_viewed_posts,
            'title'=>'Hazorasp tuman fermerlar kengashi rasmiy veb sayti'
        ]);
    }


    public function actionSearch($s = null){

        $name = "Qidiruv natijalari";
        $code = '11';
        if($s == null){
            $code = "desc";
        }
        $model = null;
        switch ($code){
            case 'desc': $model = News::find()->where(['status'=>1])->orderBy(['created'=>SORT_DESC]); break;
            default :
                {
                    $code = 'search';
                    $model = News::find()
                        ->andFilterWhere([
                            'or',
                            ['like', 'name', $s],
                            ['like', 'preview', $s],
                            ['like', 'detail', $s],
                        ]);
                    ;
                }
        }

        $countQuery = clone $model;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => 10]);
        $models = $model->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('news', [
            'model' => $models,
            'pages' => $pages,
            'code'=>$s,
            'name'=>$name,
        ]);
    }


    public function actionNews($code = null){



        if($code == null){
            $code = "desc";
            $name = "Барча хабарлар";
        }
        $model = null;
        switch ($code){
           case 'desc' : $model = News::find()->where(['status'=>1])->where(['>','id',3])->orderBy(['created'=>SORT_DESC]);break;
            default :
                {
                    if($cat_id = Category::findOne(['code'=>$code])){

                    $code = $cat_id->code;
                    $name = $cat_id->name;
                    $cat_id = $cat_id->id;
                    $model = News::find()->where(['status' => 1])->andWhere(['cat_id'=>$cat_id])->orderBy(['created' => SORT_DESC]);

                    }else{
                        $model = false;
                    }
                }
        }

        if(!$model){
            throw new NotFoundHttpException();
        }
        $countQuery = clone $model;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => 5]);
        $models = $model->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        if($model->count()==0){
                throw new NotFoundHttpException();
        }
        if($code=='raxbariyat' || $code=='tarmoq-bolimlar-boshliqlari' || $code=='hududiy-bolimlar-boshliqlari') {
            return $this->render('raxbariyat-index', [
                'model' => $models,
                'pages' => $pages,
                'code'=>$code,
                'name'=>$name,
            ]);
        }

        return $this->render('news', [
            'model' => $models,
            'pages' => $pages,
            'code'=>$code,
            'name'=>$name,
        ]);
    }

    public function actionPage($code = null){
        if($code == null){
            throw new NotFoundHttpException();
        }

        $c = Category::findOne(['code'=>$code]);
        $name=$c->name;
        if($m = News::findOne(['cat_id'=>$c->id])){
            return $this->render('page',[
                'model'=>$m,
                'code'=>$code,
                'name'=>$name
            ]);
        }else{
            throw new NotFoundHttpException();
        }


    }

    public function actionSitemap(){


        return $this->render('sitemap');

    }

    public function actionView($code){
        if($code == null){
            throw new NotFoundHttpException();
        }

        if($model = News::findOne(['code'=>$code])){
            $model->show_counter ++;
            $model->save();
            return $this->render('view',[
                'model'=>$model,
                'code'=>$code,
                'name'=>short_str($model->name,75),
            ]);
        }else{
            throw new NotFoundHttpException();
        }

    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new Appeals();
        if ($model->load(Yii::$app->request->post()) ) {

            $model->uploadfile();
            if($model->save()) {

                Yii::$app->session->setFlash('contactFormSubmitted');

                return $this->refresh();
            }
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }



    public function actionVoteresult($id, $result){
        $res = $result;
        if($id == 0 or $res == 0){
            echo "xatolik11";
        }else{
            Yii::$app->session->set('votestatus',true);
            if($model = Vote::findOne($id)){
                if(strlen($model->result) == 0){

                    $r = explode(';',$model->answer);
                    $n = 0;
                    $t = [];
                    foreach ($r as $item) {
                        if(strlen($item)==0){
                            continue;
                        }
                        $n++;
                        $t[$n] = 0;
                    }
                    $model->result = json_encode($t);

                }
                $r = json_decode($model->result,true);

                $r[intval($res)] = intval($r[intval($res)])+1;
                $model->result = json_encode($r);
                $model->save();
                $t = explode(';',$model->answer);
                foreach ($r as $key=>$item){
                   echo "<li class='cat-item'>{$t[$key-1]} - $item</li>";
                }
            }else{
                echo "xatolik22";
            }
        }
    }

}

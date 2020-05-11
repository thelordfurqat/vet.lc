<section class="no-results not-found">
    <header class="page-header">
        <h2 class="page-title">Hech nima topilmadi</h2>
    </header><!-- .page-header -->

    <div class="page-content">
        <div class="side-widget">
            <h5>Qidirish</h5>
            <div class="side-search">
                <?php use yii\widgets\ActiveForm;

                $form = ActiveForm::begin(['action' => Yii::$app->urlManager->createUrl(['site/search']),'method'=>'get']);

                ?>

                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search" value="" name="s">
                    <span class="input-group-btn btn-default">
          <button type="submit" class="btn btn-hover" style="height: 40px; line-height: 20px;"> <i class="fa fa-search"></i> </button>
          </span>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <br>
        <p>Kechirasiz, Hech nima topilmadi </p>


    </div><!-- .page-content -->
</section>

<style>
    .btn-hover:hover{
        color:#fff;
    }
</style>
<?php
/**
 * Created by PhpStorm.
 * User: Dilmurod
 * Date: 22.01.2019
 * Time: 22:54
 */

if(isset($date)){
    $time = strtotime($date);
    $month[1] = "Yanvar";
    $month[2] = "Fevral";
    $month[3] = "Mart";
    $month[4] = "Aprel";
    $month[5] = "May";
    $month[6] = "Iyun";
    $month[7] = "Iyul";
    $month[8] = "Avgust";
    $month[9] = "Sentabr";
    $month[10] = "Oktabr";
    $month[11] = "Noyabr";
    $month[12] = "Dekabr";
    $newformat = date('d, Y',$time);
    $m = $month[intval(date('m',$time))];

    echo $m. ' '. $newformat;
}
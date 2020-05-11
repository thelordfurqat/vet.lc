<?php
function date_($date){
    $date1 = new DateTime($date);
    return $date->format('d-M-Y');
}
function dateTime_($date){
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
    $newformat = date('d, Y h:i',$time);
    $m = $month[intval(date('m',$time))];

    return $m. ' '. $newformat;
}
function debug($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
<?php
    $dta [0] ["NAMA"] = "tiara andini";
    $dta [0] ["TGL_LAHIR"] = "2001-09-23";
    $dta [0] ["JKEL"] = "P";
    $dta [0] ["FILM"] = "MY Sassy Girl";
    $dta [0] ["ALBUM"] = "Arti Untuk Cinta";


    $dta [1] ["NAMA"] = "ziva magnolya";
    $dta [1] ["TGL_LAHIR"] = "2001-03-14";
    $dta [1] ["JKEL"] = "P";
    $dta [1] ["FILM"] = "ami award";
    $dta [1] ["ALBUM"] = "indonesia pop";

    $dta [2] ["NAMA"] = "mahalini raharja";
    $dta [2] ["TGL_LAHIR"] = "2000-03-4";
    $dta [2] ["JKEL"] = "L";
    $dta [2] ["FILM"] = "hits";
    $dta [2] ["ALBUM"] = "fabula";



    header("content-type:application/json; charset=utf-8");
    echo json_encode($dta);
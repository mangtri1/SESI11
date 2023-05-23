<?php
    $dta ["NAMA"] = "tiara andini";
    $dta ["TGL_LAHIR"] = "2001-09-23";
    $dta ["JKEL"] = "P";
    $dta ["FILM"] = "MY Sassy Girl";
    $dta ["ALBUM"] = "Arti Untuk Cinta";




    header("content-type:application/json; charset=utf-8");
    echo json_encode($dta);
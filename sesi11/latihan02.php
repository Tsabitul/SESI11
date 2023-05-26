<?php
    $dta[0]["NIM"]="1122334455";
    $dta[0]["NAMA"] ="Jhonson";
    $dta[0]["KELAS"] ="C";
    $dta[0]["JenisKelamin"] ="Laki-Laki";
    $dta[0]["UMUR"] ="99thn";
    $dta[0]["ALAMAT"] ="Denpasar,Bali";




    $dta[1]["NIM"]="223344556677";
    $dta[1]["NAMA"] ="Jhon";
    $dta[1]["KELAS"] ="A";
    $dta[1]["JenisKelamin"] ="Laki-Laki";
    $dta[1]["UMUR"] ="100thn";
    $dta[1]["ALAMAT"] ="Denpasar,Bali";




    header("content-type:application/json;charset=utf-8");
    echo json_encode($dta);
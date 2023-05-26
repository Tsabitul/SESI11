<?php
    $dta["NIM"]="1122334455";
    $dta["NAMA"] ="Jhonson";
    $dta["KELAS"] ="C";
    $dta["JenisKelamin"] ="Laki-Laki";
    $dta["UMUR"] ="99thn";
    $dta["ALAMAT"] ="Denpasar,Bali";


    header("content-type:application/json;charset=utf-8");
    echo json_encode($dta);
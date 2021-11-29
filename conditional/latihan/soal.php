<?php

$nama = "Ratna";
$status = "sekretaris";
$keluarga = "1" ;
$lembur = "35" ;
$uangTp = 35000;

echo "Nama Pekerja :" .$nama. "<br>";
echo "Status :" . $status . "<br>";

if ($status == "manager") {
        $gaji = 4500000 ;
        echo "gaji pokok :" . $gaji;
    }else if ($status == "sekretaris") {
        $gaji = 3500000 ;
        echo "gaji pokok :" . $gaji;
    }else if ($status == "staff") {
        $gaji = 3000000 ;
        echo "gaji pokok :" . $gaji;
    }else if ($status == "karyawan") {
        $gaji = 2800000 ;
        echo "gaji pokok :" . $gaji;
    }else {

    }
    echo "<hr>";

    $bpjs = $keluarga * 150000;
    echo "BPJS :" . $bpjs . "<br>";

    $pajak = $gaji * 0.025;
    echo "pajak :" .$pajak . "<br>";

    $totpot = $bpjs + $pajak ;
    echo "total potongan : " . $totpot ;

    echo "<hr>";

    $tunjangan = 0.1 * $gaji ;
    echo "Tunjangan sebesar :" .$tunjangan . "<br>";

    if ($status == "manager") {
        $lm = 50000 * $lembur ;
        echo "lembur :" . $lm;
    }else if ($status == "sekretaris") {
        $lm = 45000 * $lembur ;
        echo "lembur :" . $lm;
    }else if ($status == "staff") {
        $lm = 30000 * $lembur;
        echo "lembur :" . $lm;
    }else if ($status == "karyawan") {
        $lm = 25000 * $lembur ;
        echo "lembur :" . $lm;
    }else {

    }

    echo "<br>";

    $trans = $uangTp * 24 ;
    echo "Transport :" .$trans;

    echo "<hr>";

    $bonus = $tunjangan + $trans + $lm;
    echo "bonus :" . $bonus ;

    echo "<hr>";

    $bersih = $gaji - $totpot + $bonus ;
    echo " Gaji Bersih :". $bersih ;

?>
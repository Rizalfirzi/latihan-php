<?php
if (isset($_POST['simpan'])){
    $nama =$_POST['nama'];
    $jk = $_POST['jk'];
    $bb = $_POST['bb'];
    $tb = $_POST['tb'];

    if ($jk =='Laki-Laki') {
    if($tb < 170 OR $bb > 90) {
        $i = "tidak diterima";
    } else {
        $i = "diterima";
    }

    if ($jk =='Perempuan') {
        if($tb < 160 OR $bb > 70) {
            $i = "tidak diterima";
        } else {
            $i = "diterima";
        }

 }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Pendaftaran TNI </center>
    Nama Lengkap : <b><?php echo $nama; ?></b><br>
    Jenis Kelamin : <b><?php echo $jk; ?></b><br>
    Tinggi Badan : <b><?php echo $tb; ?></b>cm<br>
    Berat Badan : <b><?php echo $bb; ?></b>kg<br>
    <?php echo "$i" ?>
</body>
</html>
<?php } ?>
<?php

$siswa = [
    ['nama' => 'ubed', 'jk' => 'laki-laki', 'umur' => 17],
    ['nama' => 'maman', 'jk' => 'laki-laki', 'umur' => 17],
    ['nama' => 'yati', 'jk'=> 'perempuan', 'umur' => 16],
];

foreach ($siswa as $value) {
    echo "Nama          :" . $value['nama'] . "<br>";
    echo "Jenis Kelamin :" . $value['jk'] . "<br>";
    echo "Umur          :" . $value['umur'] . "<br>";
    echo "<hr>";
    
}
?>
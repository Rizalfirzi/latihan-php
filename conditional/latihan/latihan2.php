<?php
    $ipk = "2.5";
    
    if ( $ipk <= 0 || $ipk > 4 ) {
        echo "sistem error";

    } else if ( $ipk >= 3.5 ) {
            echo "grade A, mata kuliah anda super";

    } else if ( $ipk >= 3 ){
        echo "grade B, mata kuliah anda baik";

    } else if  ( $ipk >= 2.6 ){
        echo "grade C, mau memperbaiki boleh tidak juga tidak apa-apa";

    } else if ( $ipk <= 2.6 ){
        echo "grade D, maaf anda harus memperbaiki mata kuliah";

    } else if ( $ipk <= 2 ){
        echo "grade E, maaf anda harus mengulang";
    }

?>
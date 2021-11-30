<?php
    for ($a=1;$a<= 10;$a++){
        for ($b=1; $b <= $a;$b++){
        echo(" ");
        }
        for ($c=0;$c>=($a-5);$c--){
          echo"*";
        }
        for ($c=0;$c<(5-$a);$c++){
          echo "*";
        }
        echo "<br>";
      }
?>
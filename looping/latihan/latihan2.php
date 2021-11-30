<?php
    for ($a=1;$a<=10;$a++){
        echo"";
        for ($b=1; $b<=$a;$b++){
        echo " ";
        }
        for ($c=0;$c>=($a-10);$c--){
          echo("*");
        }
        for ($c=0;$c<(10-$a);$c++){
          echo("*");
        }
        echo "<br>";
      }
    


?>
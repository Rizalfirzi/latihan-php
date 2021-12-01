<?php
for ($i=5 ; $i>=1;$i--){
    for($a=1;$a<=$i;$a++){
        echo "&nbsp";
    }
    for($b=5;$b>=$i;$b--){
    echo " *";
    }
echo "<br>";
}

for ($i=1 ; $i<=5;$i++){
    for($a=1;$a<=$i;$a++){
        echo "&nbsp";
    }
    for($b=4;$b>=$i;$b--){
    echo "  *";
    }
echo "<br>";
}
 ?>
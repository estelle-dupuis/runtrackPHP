<?php
for ($i = 0; $i <=100; $i++) {
    if ($i <=20) {
        echo"<em>$i</em><br>";
    }
    elseif ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br>";
    }
    elseif ($i === 42){
        echo "LaPlateforme_<br>";
    }
    else{
        echo "$i<br>";
    }
}
?>
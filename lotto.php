<?php

for($j=1; $j<=5;$j++) {

    

  

for($i=1;$i<=6;$i++) {
    $randomFloat = rand(1, 165) / 205;
    $lottoBroj = round($randomFloat*49);

    if($lottoBroj>=1) {

    echo $lottoBroj;

        if($i<6){
            echo ",";
        }

    }

}

echo "<br>";

}

?>
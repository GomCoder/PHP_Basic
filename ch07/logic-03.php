<?php 
    /**
     * 논리 연산자 OR
     */

    $x = false;
    $y = false;
    $z = true;

    if ($x xor $y) {
        echo "x xor y = true 두개의 논리가 틀립니다. <br>";
    } else {
        echo "x xor y = false 두 개의 논리가 같습니다. <br>";
    }

    if ($x xor $y xor $z) {
        echo "x xor y xor z = true 두 개의 논리가 틀립니다. <br>";
    } else {
        echo "x xor y xor z = false 두 개의 논리가 같습니다. <br>";
    }
    
    
?>
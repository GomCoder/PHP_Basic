<?php
    /**
     * 다중 조건문
     */

    $num = "10";
     
    echo "num 값은 " . $num . "입니다.";

    if ($num >= 0) {
        echo " (양수입니다.) <br>";
        $num--;
        echo " 값을 하나 감소합니다. ($num)";
    }
?>
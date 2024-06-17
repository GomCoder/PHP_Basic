<?php
    $x = 10;
    $even = 2;
    $y = 3;

    echo "x = $x <br>";

    for ($i = 1; $i < $x; $i++) {
        if ($i % $even) {
            echo "x = $i 는 홀수입니다.<br>";
        } else {
            echo "x = $i 는 짝수입니다.<br>";
        }

        if ($i % $y) {
            echo "x = $i 는 3의 배수가 아닙니다.<br>";
        } else {
            echo "x = $i 는 3의 배수입니다.<br>";
        }
    }
?>
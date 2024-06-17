<?php
    /**
     * 서로 같지 않은 값 비교 연산자
     */
    $x = 123;
    $y = 123;

    if ($x !== $y) {
        echo "x !== y 서로 틀립니다.";
    } else {
        echo "x !== y는 같은 값입니다.";
    }

    echo "<br>";

    if ($x <> $y) {
        echo "x <> y는 서로 틀립니다.";
    } else {
        echo "x <> y는 같은 값입니다.";
    }
?>
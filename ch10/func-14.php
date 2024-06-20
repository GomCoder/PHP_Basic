<?php
    function add($a, $b) {
        return $a + $b;
    }

    echo "결과 값: ". add(...[1, 2]) . "<br>";

    $a = [4, 5];
    echo "결과 값: " . add(...$a);
?>
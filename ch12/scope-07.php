<?php
    $x = 5;
    $y = 7;

    function test() {
        global $x, $y; //글로벌 변수 접근
        $y = $x + $y;
    }

    test();
    echo $y;
    
?>
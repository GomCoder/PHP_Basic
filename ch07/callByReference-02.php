<?php
    /**
     * 참조 대입 연산자
     */

    $a = 123;
    echo "a 값입니다 = " . $a."<br>";

    $b = &$a;
    echo "b 값입니다 = ".$b."<br>";

    $b = "abcd";
    echo "a 값입니다 = " .$a."<br>";
?>
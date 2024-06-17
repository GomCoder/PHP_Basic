<?php
    /**
     * .= 연산자 : 기존 문자열에 새로운 문자열을 결합
     */

    $a = 'a';
    $string = '';

    for ($i = 0; $i < 10; $i++) {
        $string .= $a++;
        echo $string . "<br>"; 
    }

?>
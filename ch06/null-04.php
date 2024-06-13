<?php 
    /**
     * ?? 연산자: 변수에 값이 있으면 대입, null인 경우에는 초기값을 대입
     *
     */

    $x;

     if (is_null($x)) {
        echo "x = NULL 입니다.";
    } else {
        echo "x = NULL이 아닙니다.";
    }

    echo "<br>";

    $username = $x ?? 'nobody';

    echo "username = $username";
    
?>
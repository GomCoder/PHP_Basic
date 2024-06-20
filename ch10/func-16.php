<?php
    /**
     * 함수의 return 값 사용
     */

    //성인 여부를 판별하는 함수를 생성
    //인수로는 나이 값 변수 하나를 전달함
    function is_adult($age) {
        if ($age >= 18) {
            return true;
        } else {
            return false;
        }
    }

    $memAge = 20;

    if(is_adult($memAge)) {
        echo "성인입니다.";
    } else {
        echo "미성년입니다.";
    }
    
    
?>
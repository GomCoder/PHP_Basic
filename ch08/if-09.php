<?php
    /**
     * 논리 조건문 !: 조건 부정문 
     */

    //$adult 미선언
    //NELL => false 값
    if (!$adult) {
        //true 조건
        //false 조건이 부정으로 true로 변경됨
        echo "성년 판별 논리값이 비어 있습니다. <br>";

        $age = 18;

        if ($age >= 18) {
            echo "성인입니다. <br>";
        } else {
            echo "미성년입니다. <br>";
        }
    } else {
        //false 조건
        echo "성년 조건을 판별합니다. <br>";
        $adult = false;

        if ($adult) {
            echo "성인입니다. <br>";
        } else {
            echo "미성년입니다. <br>";
        }
    }
?>
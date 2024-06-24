<?php
    /**
    * global 키워트로 선언한 외부 글로벌 변수를 값을 함수 내에서 가지고 올 수 있으며 변경할 수도 있음 
    */
    $a = "jiny";
    $b = "lee";

    echo "글로벌 변수를 출력합니다. <br>";
    echo $a . " ". $b;
    echo "<br>";

    //함수 정의
    function userName() {
        //글로벌 변수 선언
        
        global $a, $b;

        if ($a) {
            echo "a =". $a . "<br>";
        } else {
            echo "a 값이 없습니다. <br>";
        }

        if ($b) {
            echo "b =" .$b . "<br>";
        } else {
            echo "b 값이 없습니다. <br>";
        }
    }

    //함수를 호출
    echo "함수를 호출합니다.<br>";
    userName();

?>
<?php
    /**
     * 함수의 매개변수에 초기값을 설정
     */
    function setHeight($minheight = 50) {
        echo "The height is : $minheight <br>";
    }

    //함수 호출 시 매개변수 값 250을 입력
    setHeight(250);

    //매개변수 값이 없는 경우 기본값이 적용됨
    setHeight();
?>
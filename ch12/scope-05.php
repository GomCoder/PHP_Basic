<?php
    //함수 재 호출시 기존 값을 잉요하여 계속 참조하는 경우
    //정적 변수의 초기화는 처음 함수를 호출할 떄 한 번만 실행됨

    function foo() {
        //정적변수를 선언한다.
        static $bar;
        $bar++;
        echo "unset 실행 전: $bar, ";

        //변수를 직접 해제함
        unset($bar);
        $bar = 21;
        echo "unset 실행 후: $bar <br>";
    }

    foo();
    foo();
    foo();
?>
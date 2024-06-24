<?php
    function increment() {
        //static 변수는 처음 한 번 선언 시에만 초기화됨
        static $total = 0;
        return ++$total;
    }

    echo "첫번째 호출: " .increment() ."<br>";
    echo "두번째 호출: " .increment() ."<br>";
    echo "세번째 호출: " .increment() ."<br>";
?>
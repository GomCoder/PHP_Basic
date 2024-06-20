<?php
        /**
         * 매개변수의 타입 힌트를 같이 정의 -> 잘못된 값의 매개변수 입력을 사전에 필터링함
         */
    
        function test(int $x) {
            echo "정수 입력: " . $x . "<br>";
        }        
        
        function test2(string $x) {
            echo "문자열 입력: " . $x . "<br>";
        }
        
        echo test(1);
        
        
        echo test2("문자열");
?>
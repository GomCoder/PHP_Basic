<?php
    /**
     * echo과 print의 차이
     * print: 반환 값이 존재 함, 출력 후 true(1) 값을 반환
     * echo: 반환 값이 없이 그냥 화면에 출력함
     */

    if ($success = print("hello world!")) {
        echo "출력 성공 " .$success;  
    } else {
        echo "출력 실패 " .$success;
    }
    
?>
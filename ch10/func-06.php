<?php
    /**
     * 함수에서 실행 인자와 매개변수 사용
     */

   function helloWorld($name, $age) {
      echo $name ."는 $age 입니다. <br>";
   }

   
   //문자열 상수 실행 인자와, 정수형 상수 실행 인자를 전달함
   helloWorld("jiny", 20);
   
?>
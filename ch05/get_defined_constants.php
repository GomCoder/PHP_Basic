<?php
    /**
     * get_defined_contants() 기존에 미리 선언된 상수의 목록을 확인할 수 있는 내부 함수
     */

     //상수 정의
     define("MY_CONSTANT", 1);
     //카테고리와 정의된 모든 상수들을 출력함
    print_r(get_defined_constants(true));
     
?>
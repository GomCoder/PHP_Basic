<?php
    /**
     * defined() 함수를 사용하여 이미 선언된 상수인지 확인하기
     * 이미 선언된 상수이면 : true
     * 없으면 : false
     */
    if (defined('TEST')) {
        echo "상수가 존재합니다";
    } else {
        echo "상수가 없습니다.";
    }
?>
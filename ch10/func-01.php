<?php
/**
 * function_exists(): 내장 함수와 사용자 함수 모두 함수명의 존재 여부를 확인하여 논리값으로 반환함 
 */
    $functionName = "intval";

    if (function_exists($functionName)) {
        echo "$functionName 함수가 존재합니다. <br>";
    } else {
        echo "$functionName 없는 함수입니다. <br>";
    }
?>
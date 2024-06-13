<?php
    /**
     * 객체인지 확인하기
     */
    $obj = new stdClass();
    
    if (is_object($obj)) {
        echo "객체입니다.";
    } else {
        echo "객체가 아닙니다.";
    }
    
?>
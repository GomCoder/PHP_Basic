<?php
    /**
    * 다중 조건문
    */ 
    $num = 5;
    
    if ($num > 0) {
        echo "양수입니다.";
    } else if ($num <0) {
        echo "음수입니다.";
    } else if ($num == 0) {
        echo "0의 값입니다.";
    } else {
        echo "알 수 없습니다.";
    } 

?>
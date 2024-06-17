<?php 
    /**
     * 중복 조건문: 다양한 조건과 상태에 따라 복합적으로 선택과 결정을 할 수 있음
     */

    $age = 20;
    $sex = "women";
    $type = "coperation";

    if ($sex == "man") {
        if ($age >= 20) {
            echo "성인 남자입니다.";
        } else {
            echo "미성년자 남자입니다.";
        }    
    } else if ($sex == "women") {
        if ($age >= 20) {
            echo "성인 여자입니다.";
        } else {
            echo "미성년자 여자입니다.";
        }
    } else if ($type == "coperation") {
        if($type == "personal") {
            echo "개인 기업입니다.";
        } else {
            echo "법인 기업입니다.";
        }
    } else {
        echo "성별을 구분할 수 없습니다.";
    }
?>
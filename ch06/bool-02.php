<?php 
    $a = false;
    $b = 0;

    //논리값으로 쓰여진 변수인지 확인한다.
    if (is_bool($a) === true) {
        echo "a는 논리 변수입니다.";
    }

    echo "<br>";
    
    //$b는 정수 0입니다. 논리변수가 아니라서 false를 반환함
    if (is_bool($b) === false) {
        echo "b는 논리변수가 아닙니다.<br>";
        var_dump($b); //변수 정보 출력
    }
?>
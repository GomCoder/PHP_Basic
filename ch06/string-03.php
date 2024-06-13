<?php 
    //문자열 변수 생성
    $name = "Hello world!";
    //저장된 문자열을 화면에 출력
    for($i = 0; $i < strlen($name); $i++) {
        //한 글자씩 출력
        echo "i = $i , " . $name[$i] . "<br>";
    }
?>
<?php
    /**
     * <=> 스페이스 연산자: 한번에 큰지, 작은지, 같은지 비교하는 연산자
     */

    //정수
    echo "정수<br>";
    echo "1 <=> 1 = ";
    echo 1 <=> 1;
    echo "<br>";
    echo "1 <=> 2 = ";
    echo 1 <=> 2;
    echo "<br>";
    echo "2 <=> 1 = ";
    echo 2 <=> 1;
    echo "<br>";
    
    //실수
    echo "<br>";
    echo "실수<br>";
    echo "1.5 <=> 1.5 = ";
    echo 1.5 <=> 1.5;
    echo "<br>";
    echo "1.5 <=> 2.5 = ";
    echo 1.5 <=> 2.5;
    echo "<br>";
    echo "2.5 <=> 1.5 = ";
    echo 2.5 <=> 1.5;
    echo "<br>";

    //문자열
    echo "<br>";
    echo "문자열<br>";
    echo "a <=> a = ";
    echo "a" <=> "a";
    echo "<br>";
    echo "a <=> b = ";
    echo "a" <=> "b";
    echo "<br>";
    echo "b <=> a = ";
    echo "b" <=> "a";
    echo "<br>";
    
?>
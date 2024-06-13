<?php 
    /**
     * 실수의 형변환
     */

    //실수 값을 입력하면 변수는 실수이다.
    $pi = 3.14;
    var_dump($pi);
    echo "pi = $pi<br>";
    
    //정수로 형변환하기
    $a = (int)5.14;
    var_dump($a);
    echo "a = $a<br>";

    //더블형으로 형변환하기
    $b = (double)3.14;
    var_dump($b);
    echo "b = $b<br>";

    //문자열로 형변환하기
    $c = (string)3.14;
    var_dump($c);
    echo "c = $c<br>";    
?>
<?php 
    /**
     * 선순위 증가
     */

    echo "후순의 증가 <br>";
    $i = 0;
    echo $i++; //$i의 값을 한 번 사용하고 ++로 1의 값이 증가 
    echo "<br>";
    echo $i++; 
    
    echo "<br>";
    echo "선순의 증가 <br>";

    $j = 0;
    echo ++$j; //$j를 사용하기 전에 1을 증가 후 변수의 값이 사용됨
    echo "<br>";
    echo ++$j;
?>
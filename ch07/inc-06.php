<?php 
    /**
     * 선순위 감소
     */

    echo "후순의 감소 <br>";
    $i = 0;
    echo $i--; //변수를 참조 후에 값이 변경됨
    echo "<br>";

    echo $i--;
    echo "<br>";
    echo $i;

    echo "<br>";
    echo "선순의 감소 <br>";
    
    $j = 0;
    echo --$j; //먼저 값이 변경됨
    echo "<br>";
    echo --$j;
    echo "<br>";
    echo $j;
?>
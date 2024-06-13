<?php 
    /**
     * 소수점 처리
     */

    //ceil(): 올림
    echo ceil(4.3)."<br>";
    echo ceil(9.999)."<br>";
    echo ceil(-3.14)."<br>";
    
    //floor(): 버림
    echo floor(4.3)."<br>";
    echo floor(9.999)."<br>";
    echo floor(-3.14)."<br>";

    //round(): 반올림 처리
    echo round(3.4)."<br>";
    echo round(3.5)."<br>";
    echo round(3.6)."<br>";
    echo round(3.6, 0)."<br>";

    //소수점 자리 반올림
    echo round(1.95583, 2)."<br>";
    echo round(5.045, 2)."<br>";
    echo round(5.055, 2)."<br>";

    //소수점 위 세 자리에서 반올림
    echo round(1241757, -3)."<br>";
?>
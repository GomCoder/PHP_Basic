<?php
    /**
     * 가변 변수 사용
     */

    $abc = "123";
    $bbb = "abc";

    echo $bbb."<br>";
    echo $$bbb."<br>";

    echo ${$bbb}."<br>";
    echo ${"abc"}."<br>";
    
?>
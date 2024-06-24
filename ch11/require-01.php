<?php
    /**
     * require 전처리기 사용: 파일이 없으면 치명적 오류 출력후 중단, 반드시 이루어져야 하는 필수 기능인 경우 사용
     */

    require "include_lib.php";
    
    $x = 10;
    $y = 5;
    
    echo addPlus($x, $y);
?>
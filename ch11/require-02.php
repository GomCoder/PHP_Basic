<?php
/**
 * 두번 중복 사용하는 경우를 방지
 */
    require_once "include_lib.php";
    require_once "include_lib.php";

    $x = 10;
    $y = 5;
    
    echo addPlus($x, $y);
    
?>
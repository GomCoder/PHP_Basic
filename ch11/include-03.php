<?php
    /**
     * include를 두번 중복하는 하는 경우 중복을 방지
     */
    include_once "include_lib.php";
    include_once "include_lib.php";

    $x = 10;
    $y = 5;

    echo addPlus($x, $y);
    
?>
<?php
    /**
     * 배열의 형태까지 비교
     */

    $x = array("red" => "빨강", "green" => "녹색"); 
    $y = array("red" => "빨강", "green" => "녹색"); 
    
    //두 개의 배열이 같은지 확인
    var_dump($x === $y);

    echo "<br>";
    $z = array("green" => "녹색", "red" => "빨강");
    var_dump($x === $z);
?>
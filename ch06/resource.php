<?php
    /**
     * 리소스 타입: 함수를 참조하거나 외주 PHP리소스를 참조할 수 있음
     */

    //Mysql 링크 출력
    $c = mysqli_connect("localhost", "phproot", "root", "phpdb");

    
    echo mysqli_get_host_info($c) ."<br>";
     
     //스트림 출력
     $fp = fopen("foo", "w");
     echo get_resource_type($fp) . "<br>";

    //docxml 문서 
    $doc = new DOMDocument("1.0");
    echo get_class($doc) . "<br>";
?>
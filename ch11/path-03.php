<?php
    /**
     * 현재 실행하고 있는 스크립트의 소스 파일 정보 출력
     */
    echo __FILE__;
    echo "<br>";

    //PHP 파일의 절대 서버 경로
    echo realpath(__FILE__); //절대 경로
    echo "<br>";
    //PHP 파일 이름
    echo basename(__FILE__); //경로를 제외한 현재의 실행 스크립트 파일명만 출력
    echo "<br>";
?>
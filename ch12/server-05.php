<?php
    echo "HTTP_ACCEPT = ".$_SERVER['HTTP_ACCEPT']; //현재 요정에 대한 헤더 반환
    echo "<br>";

    echo "HTTP_ACCEPT_CHARSET = " .$_SERVER['HTTP_ACCEPT_CHARSET']; //현재 요청에 대한 Accept_Charset 헤더 반환
    echo "<br>";

    echo "HTTP_ACCEPT_ENCODING = ".$_SERVER['HTTP_ACCEPT_ENCODING']; //인코딩 방식
    echo "<br>";

    echo "HTTP_ACCEPT_LANGUAGE = ".$_SERVER['HTTP_ACCEPT_LANGUAGE']; //언어
    echo "<br>";

    echo "HTTP_HOST = ".$_SERVER['HTTP_HOST']; //현재 요청에서 Host 헤더를 반환
    echo "<br>";

    echo "HTTP_REFERER = ".$_SERVER['HTTP_REFERER']; //현재 페이지로 오기 전의 페에지 URL을 반환 
    echo "<br>";

    echo "SERVER_ADMIN = ".$_SERVER['SERVER_ADMIN']; //웹 서버 설정에서 SERVER_ADMIN 지시어에 주어진 값 반환
    echo "<br>";

    echo "SERVER_PORT = ".$_SERVER['SERVER_PORT']; //서버 포트 반환
    echo "<br>";

    echo "SERVER_SIGNATURE = ".$_SERVER['SERVER_SIGNATURE']; //서버 생성 페이지에 추가되는 서버 버전 및 가상 호스트 이름을 반환함
    echo "<br>";



?>
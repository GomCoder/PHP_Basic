<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') { //페이지 접속 방식을 반환
        echo "GET 방식으로 접속하였습니다.<br>";
    } else if($_SERVER['REQUST_METHOD'] == "POST") {
        echo "POST 방식으로 접속하였습니다.<br>";
    } else {
        //아무 작업하지 않음
    }

    echo "REQUEST_TIME = ".$_SERVER['REQUEST_TIME']; //접속 타임 스템프를 반환
    echo "<br>";
    echo "REQUEST_URI = ".$_SERVER['REQUEST_URI']; //현재 페이지 주소에서 도메인을 제회한 값을 반환
    echo "<br>";
    echo "HTTP_USER_AGENT = ".$_SERVER['HTTP_USER_AGENT']; //사이트에 접속한 클라이언트 프로그램 정보르 ㄹ반환
    echo "<br>";
    echo "APPLPHYSICAL_PATH = ".$_SERVER['SCRIPT_FILENAME']; //현재 페이지의 실제적인 주소를 반환
    echo "<br>";

?>
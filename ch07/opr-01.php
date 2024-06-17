<?php
    /**
     * @ 오류 제어 연산자: 발생된 오류 메시지를 무시함
     * 접속자에게 오류 코드를 감추어 보안의 유효성을 높이기 위해 사용함
     */

    //php.ini의 수정 없이 화면에 에러 발생 시 출력
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    
    //text.php는 실제 존재하지 않는 파일
    @include('test.php');
    //include('test.php');
?>
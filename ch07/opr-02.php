<?php
    /**
     * @ 오류 제어 연산자: 발생된 오류 메시지를 무시함
     * 접속자에게 오류 코드를 감추어 보안의 유효성을 높이기 위해 사용함
     * 이후 문제 해결을 위해 오류가 발생한 경우에는 별도로 오류 메시지를 $php_errormsg 변수에 저장해 놓는다.
     * 
     */

    //php.ini의 수정 없이 화면에 에러 발생 시 출력
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    
    $my_file = @file('testing.txt') or die($php_errormsg."= 오류를 출력합니다.");    
?>
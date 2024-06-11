<?php
    /*
     * define() 함수: 실행 후 결과값으로 논리값을 반환함 -> 상수 설정의 성공 여부를 알 수 있음
     * 성공: true
     * 실패: false
     */
    
    define("DB_TYPE", "mysql"); //상수 정의
    echo DB_TYPE."<br>"; //설정한 상수 출력

    //상수를 중복 정의해 보기
    if (define("DB_TYPE", "mysql")) {
        echo "상수 설정 성공";
    } else {
        echo "상수 설정 실패";
    }
?>
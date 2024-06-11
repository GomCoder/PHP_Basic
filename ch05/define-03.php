<?php
    /**
     * 배열 상수 사용하기 PHP 7.X 버전부터 define() 함수가 개선됨
     */

    //배열 상수 선언
    define('ANIMALS', [
        'dog','cat', 'bird'
    ]);

    echo ANIMALS[1]; //출력: cat
?>
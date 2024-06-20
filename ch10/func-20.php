<?php
    /**
     * 익명 함수 사용과 호출
     */

    $metting = function($name) {
        printf("Hello %s\r\n", $name);
    };

    $metting('jiny');

?>
<?php
    /**
     * create_function() 함수를 통한 콜백 처리(재귀함수)
     */

    $fp = fopen("README.txt", "r") or die("stdin을 읽을 수 없습니다.");

    while(!feof($fp)) {
        $line = fgets($fp);

        $line = preg_replace_callback('|<p>\s*\w|', 
            // create_function(
            //     '$matches', 
            //     'return strtolower($matches[0]);'
            // ), 
            function($matches) {
                return strtolower($matches[0]);
            },
        $line
        );
    echo $line;
    }
    fclose($fp);
?>
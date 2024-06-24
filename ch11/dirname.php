<?php
    /**
     * 입력된 파일 경로에서 디렉터리 부분만 추출하기
     */

    $path = "/dir1/dir2/dir3/3text.txt";
    
    echo dirname($path, 1)."<br>";
    echo dirname($path, 2)."<br>";
    echo dirname($path, 3)."<br>";
    
?>
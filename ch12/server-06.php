<?php
    if ($_SERVER['HTTPS'] == 'on') { //https 프로토콜 여부를 확인
        echo "https://";
    } else {
        echo "http://";
    }

    
?>
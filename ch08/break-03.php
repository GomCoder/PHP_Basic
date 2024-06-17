<?php

    $n = "label2";

    switch ($n) {
        case "label1":
            echo "n값이 label1일 경우 실행됩니다.<br>";
            break;
        case "label2":
            echo "n값이 label2일 경우 실행됩니다.<br>";
            //break;
        case "label3":
            echo "n값이 label3일 경우 실행됩니다.<br>";
            break;
        default:
            echo "n값이 일치하는 게 없는 경우 실행됩니다.<br>";    
    }

?>
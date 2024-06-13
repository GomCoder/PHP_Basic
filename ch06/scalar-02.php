<?php
    //Coercive 방법(강제적인 방법)
    function sumOfStr(string ...$strs) {
        print_r($strs);
        echo "<br>";
    }

    var_dump(sumOfStr('호랑이', '토끼', 4));
?>
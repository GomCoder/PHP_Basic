<?php
    /**
     * 참조 매개변수 사용
     */

    function drink(&$name) {
        $name = "사이다";
    }

    $drinkName = "콜라";

    echo "음료수 이름 = $drinkName <br>";

    drink($drinkName);
    echo "음료수 이름 = $drinkName <br>";
?>
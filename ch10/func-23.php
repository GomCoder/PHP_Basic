<?php
    /**
     * 재귀 호출
     */
    function recursion($a) {
        if ($a < 5) {
            echo "입력 값 = $a <br>";
            //자기 자신을 호출함
            recursion($a + 1);
            echo "함수 탈출($a) <br>";
        }
    }

    $a = 1;
    recursion($a);

    echo "<br>";

    function recursion2($a) {
        if ($a < 5) {
            echo "이전: ".$a."<br>";
            recursion2($a + 1);
            echo "이후: ".$a."<br>";
        }
    }
    recursion2(0);
?>
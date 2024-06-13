<?php
    //Coercive 방법(강제적인 방법)
    echo "정수 합계.<br>";

    function sumOfInts(int ...$ints) {
        print_r($ints);
        echo "<br>";

        //배열의 합계를 출력
        return array_sum($ints);
    }

    var_dump(sumOfInts(2, '3', 4.1));

    echo "<br>";
    echo "실수 합계.<br>";

    function sumOfFloat(float ...$floats) {
        print_r($floats);
        echo "<br>";

        //배열의 합계 출력
        return array_sum($floats);
    }

    var_dump(sumOfInts(2, '3', 4.1));
?>
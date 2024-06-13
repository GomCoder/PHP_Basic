<?php 
    /**
     * 연상 배열을 이름 키 값을 통해 반복문을 이용하여 출력하기
     */

    $age = array("Jiny" => "44", "Ben" => "37", "Jeo" => "43");

    foreach ($age as $x => $x_value) {
        echo "Key=" .$x .", Value=" .$x_value;
        echo "<br>";
    }
?>
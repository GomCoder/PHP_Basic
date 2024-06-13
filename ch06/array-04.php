<?php 
    /**
     * 연상 배열: index 번호가 아닌 연상 키워드를 이용한 배열
     * $변수명 = array("이름" => "데이터1", "이름" => "데이터2", ...);
     */

    $age = array("Jiny" => "44", "Ben" => "37", "Jeo" => "43");
    echo "Jiny is " . $age['Jiny'] . " years old." . "<br>";    
    echo "Ben is " . $age['Ben'] . " years old." . "<br>";    
    echo "Jeo is " . $age['Jeo'] . " years old." . "<br>";    
?>
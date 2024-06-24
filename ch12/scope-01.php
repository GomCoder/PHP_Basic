<?php
    $x = 5; //글로벌 변수
    
    function test() {
        echo "함수 안에서는 외부 변수를 사용할 수 없습니다. x = $x</p>";
    }

    test();

    echo "외부에서는 글로벌 변수를 사용할 수 있습니다.x = $x</p> ";
        
?>
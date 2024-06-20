<?php
    /**
     * 제너레이터 델리게이션
     */
    function gen() {
        yield "gen() 1 실행"; 
        yield "gen() 2 실행"; 

        //세 번쨰 yield는 gen2() 제터레이터로 연결
        yield from gen2();
    }

    function gen2() {
        yield "gen2() 3 실행";
        yield "gen2() 4 실행";
    }

    foreach (gen() as $val) {
        echo $val."<br>";
    }
    
    
?>
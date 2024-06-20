<?php
    /**
     * 제너레이터
     */

    //yield 키워드는 값을 반환한다는 측면에서 return 키워드와 비슷하면서도 다르다.
    function myGen() {
        //호출 시 첫번째 yield 키워드까지 실행함
        echo "첫 번째 호출=";
        yield "test1";
        
        //호출 시 두번째 yield 키워드까지 실행함
        echo "두 번째 호출=";
        yield "test2";

        //호출 시 세번째 yield 키워드까지 실행함
        echo "세 번째 호출=";
        yield "test3";

    }
    
    foreach (myGen() as $value) {
        echo $value ."<br>";
    }
?>
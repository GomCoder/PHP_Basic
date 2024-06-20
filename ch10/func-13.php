<?php
    /**
     * 가변 인자 사용: 함수의 인자 값의 개수를 예측하기 어려울 때 유용함
     */

     //가변 인자로 받음
     function sum(...$numbers) { //인수를 배열 형태로 사용
        $acc = 0;
        
        foreach ($numbers as $n) {
            $acc += $n;
        }
        return $acc;
     }
     
     echo sum(1, 2, 3, 4, 5);
?>
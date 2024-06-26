<?php
/**
 * 반환 데이터 타입 선언하기
 */

    function arraySum(array ...$arrays): array {
        return array_map(
            function (array $array): int {
                return array_sum($array);
            },
            $arrays
        );
    }

    print_r(
        arraySum(
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        )
        );
    
?>
<?php 
    /**
     * is_float(): 생성한 변수가 실수 인지 확인
     */
    
    var_dump(is_float(27.25) );
    var_dump(is_float('abc') );
    var_dump(is_float(23) );
    var_dump(is_float(23.5) );
    var_dump(is_float(1e7) );
    var_dump(is_float(true) );
?>
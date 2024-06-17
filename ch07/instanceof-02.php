<?php
    /**
     * instanceof 연산자: PHP 변수의 클래스 객체 여부 확인
     */

class ParentClass {

}

class MyClass extends ParentClass {
}

$a = new MyClass();

var_dump($a instanceof MyClass);
var_dump($a instanceof ParentClass);

    
?>
<?php
    /**
     * 클래스 가변 메서드
     */

    class jiny {
        function Variable() {
            $name = 'Bar';
            $this->$name(); //Bar() 메서드를 호출함
        }

        function Bar() {
            echo "This is Bar";
        }
    }

    $jiny = new jiny();
    $funcname = "Variable";
    $jiny->$funcname(); //$jiny->Variable()를 호출함
?>
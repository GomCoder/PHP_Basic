<?php 
    //미리 정의된 상수 사용하기
    
    //파일의 전체 경로와 파일명, 절대 경로 표시
    echo __FILE__ . "<br>\n";
    
    //상수를 정의한 위치
    echo __LINE__ . "<br>\n";
    
    //서버에 설치된 PHP 버전 표시
    echo PHP_VERSION . "<br>\n";

    //PHP가 실행 중인 OS의 이름을 표시
    echo PHP_OS . "<br>\n";
    
    //논리값 출력
    echo TRUE . "<br>\n"; //화면에 1 출력
    echo FALSE . "<br>\n"; //아무것도 출력하지 않음

    //함수명 상수 정의
    function functionname() {
        echo __FUNCTION__."<br>";
    }
    
    functionname();

    //클래스명 상수 정의
    class classtest {
        var $test = __CLASS__; //클래스명 표시
        
        function test() {
            echo $this->test; 
        }
    }

    $test = new classtest;
    echo $test->test."<br>";

    
    //메서드명 상수 정의
	class classtest2
	{ 
        var $test;
        
        function test()
        { 
            $this->test = __METHOD__;//클래스의 메서드명 표시 
            echo $this->test."<br>";
        } 
	} 

	$test2 = new classtest2; 
    $test2->test();
	//echo $test2->test."<br>";
?>
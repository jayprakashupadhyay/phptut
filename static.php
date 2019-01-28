<?php
class abc{
	public static $data = 'test data';

	public static function xyz(){
		echo "xyz is a static function";
	}

	public function __construct($d){
        self::$d = $data;

        
	}
}

class xyz extends abc{
	public static function test(){
		echo parent::$data . "<br>";
		echo parent::xyz();
	}
}

xyz::test();
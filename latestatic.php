<?php
class db{
	protected static $table = 'basetable';

	public function select(){
		echo "select *from " . static::$table;

	}

	public function insert(){
		echo "Insert into ". static::$table;
	}
}

class abc extends db{
	protected static $table = 'abc';
}

//$abc = new abc();

//$abc->insert();

abc::select();
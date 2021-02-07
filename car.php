<?php 

require 'abstract.php';

class Car extends Veichle{
	public function foule(){
		return;
	}
	public function fouelAmount(){
      return 5;
	}
	public function capacity(){
		return 12;
	}
}

$obj = new Car();

echo $obj->capacity();
echo "</br>";
echo $obj->foule();
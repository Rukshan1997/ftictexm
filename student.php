<?php 

class student{
	public $name;
	public $age;
	public $city;

	public function __construct($name , $age , $city)
	{
		$this->name=$name;
		$this->age=$age;
		$this->city=$city;
	}

	public function print(){

		echo "$this->name , $this->age , $this->city";
	}
}

class st1 extends student{

}
class st2 extends student{

}class st3 extends student{

}


$obj1= new st1("nih","23","Kurunegala");
$obj1->print();


echo "<br>";

$obj2= new st2("Raji","23","moratuwa");
$obj2->print();


echo "<br>";


$obj3= new st3("aja","23","ampara");
$obj3->print();







 ?>
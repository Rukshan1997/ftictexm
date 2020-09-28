<?php 

// $var = "Fuck you";
// echo "$var Bitch";

class pornstar{
	public $name;
	public $color;

	public function set_name($name){
		$this->name=$name;

	}

	public function get_name(){
		return $this->name;
	}


}

$obj1=new pornstar();
$obj1->set_name(" Dani");
echo $obj1->get_name();

// echo "<br>";
// echo "Hello Dani";







 ?>
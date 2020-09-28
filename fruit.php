<?php 

class fruit{

	public $name;
	public $color;

	public function __construct ($name , $color){
		$this->name = $name;
		$this->color = $color;
	
	}

	public function print(){

		echo "This fruit is '$this->name' and color is '$this->color'";
	}

}


	class strawberry extends fruit {

	}

	class banana extends fruit {

	}

	


	$obj1 = new strawberry("strawberry","red");
	$obj1->print();


	echo "<br>";


	$obj2 = new banana("banana","yellow");
	$obj2->print();




 ?>
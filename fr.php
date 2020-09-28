<?php 

	class fruits{
		public $name;
		public $color;

		public function __construct($name , $color){
			$this->name=$name;
			$this->color=$color;
		}

		public function print()
		{
			echo "fruit name is $this->name and color is $this->color";
		}


	}

class banana extends fruits{


}

$obj = new banana("banana" , "yellow");
$obj->print();






 ?>
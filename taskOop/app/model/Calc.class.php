<?php
class Calc{
	public $num1;
	public $num2;

	public function __construct($num1, $num2){
		$this->num1 = $num1;
		$this->num2 = $num2;
	}

	public function add(){
		return $this->num1 + $this->num2;
	}
	public function subtract(){
		return $this->num1 - $this->num2;
	}


	public function multi(){
		return $this->num1 * $this->num2;
	}
	public function devided(){
		return $this->num1 / $this->num2;
	}
} 
?>
<?php
Class SortData{
	public $nums;

	public function setNums($nums){
		if(is_array($nums)){
			$this->nums = $nums;
		}else{
			echo "sorry you should enter array";
		}
	}
	public function getNums(){
		return $this->nums;
	}

	public function sortArr(){
		sort($this->nums, SORT_REGULAR);
		echo "<pre>";
		print_r($this->nums);
		echo "</pre>";
	}
} 
?>
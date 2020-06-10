<?php
Class SortData{
	public $nums;
	public $mynewNum;
	public $mysort;

	public function setNums($nums){
		if(is_array($nums)){
			$this->nums = $nums;
			return true;
		}else{
			return false;
		}
	}
	
	private function sortArr(){
		// sort($this->nums, SORT_REGULAR);
		// echo "<pre>";
		// print_r($this->nums);
		// echo "</pre>";
		if($this->setNums($this->nums)){
		sort($this->nums, SORT_REGULAR);
		echo "<pre>";
		print_r($this->nums);
		echo "</pre>";
		}else{
			
		}
	}
	public function getNums(){
		$mynewNum = $this->setNums($this->nums);
		$mysort = $this->sortArr();
		if($mynewNum){
		    $mysort;
		}else{
			echo "error";
		}

	}
}





// class SortData{
// 	public $nums;

// 	public function setNmums($nums){
// 		if(is_array($nums)){
// 			$this->nums = $nums;
// 			return true;
// 		}else{
// 			return false;
// 		}
// 	}

// 	public function sortArr(){
// 		sort($this->nums, SORT_REGULAR);
// 		echo "<pre>";
// 		print_r($this->nums);
// 		echo "</pre>";
// 	}
// 	public function getNums(){
// 		return $this->nums;
// 	}
// } 
?>
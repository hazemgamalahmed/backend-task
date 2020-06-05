<?php
$data = new SortData;
// $data->welcome("hazem");
$nums = [11, -2, 4, 35, 0, 8, -9];
$data->setNums($nums);
$data->getNums();
$data->sortArr();

echo "<br>" . "------------------------------------------------" . "<br>";

$calc = new Calc(12, 6);
echo $calc->add();
echo "<br>";
echo $calc->subtract();
echo "<br>";
echo $calc->multi();
echo "<br>";
echo $calc->devided();
echo "<br>";
?>
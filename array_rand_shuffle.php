<?php
$input = array("oranges", "apples", "pears","Mango","Banana");
echo "<pre>";
echo "Exmple of array_rand() Function\n";
//$randomly_pick = array_rand($input,2);
 
//echo $randomly_pick[0],"\n",$randomly_pick[1],"\n";
 
echo "Exmple of shuffle() Function\n";
 
shuffle($input);
 
print_r($input);
<?php
echo "<pre>";
$numbers=range(5,10);
echo "Ascending Order: \n";
print_r($numbers);
echo "\n";
echo "Descending Order: \n";
$numbers2=range(10,5);
print_r($numbers2);
 
$letters=range("a","f");
echo "Ascending Order: \n";
print_r($letters);
echo "\n";
echo "Descending Order: \n";
$letters2=range("f","a");
print_r($letters2);
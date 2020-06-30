<?php
$arr = array(1,3,2,1,5,6,1,2,3);
$countval = array_count_values($arr);
echo "<pre>";
print_r($countval);
<?php
$input = array("o"=>"oranges", "a"=>"apples", "p"=>"pears","m"=>"Mango","b"=>"Banana");

//echo count($input);
reset($input);

for($i=0;$i<count($input);$i++){
    echo key($input)."=".current($input),"\n";
    //next($input);
}
// echo "=================================\n";
// end($input);
// for($i=count($input);$i>0;$i--){
//     echo key($input)."=".current($input),"\n";
//     prev($input);
// }
<?php
$students=[
    ["name"=>"Mamnun Bin Masud","age"=>4],
    ["name"=>"Muhibbullah Bin Masud", "age"=>3],
    ["name"=>"Taha Alam","age"=>3.5]
    ];
foreach($students as $singleArray){
   extract($singleArray);
   echo "Name: $name, Age: $age \n";
}
<?php
$students=[
    ["name"=>"Mamnun Bin Masud","age"=>4],
    ["name"=>"Muhibbullah Bin Masud", "age"=>3],
    ["name"=>"Taha Alam","age"=>3.5]
    ];
foreach($students as $singleArray){
    foreach($singleArray as $key=>$value){
        echo "$key : $value \n";
    }
}
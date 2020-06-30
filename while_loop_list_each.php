<?php

$student=["name"=>"Nahid bin Azhar","age"=>34,"address"=>"Dhaka,Bangladesh"];
while (list($key, $value) = each($student)) {
    echo "$key : $value \n";
}
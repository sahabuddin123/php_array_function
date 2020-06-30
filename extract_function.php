<?php
$student=["name"=>"Nahid bin Azhar","age"=>34,"address"=>"Dhaka,Bangladesh"];
extract($student);
echo "Name: $name, Age: $age, Address: $address";
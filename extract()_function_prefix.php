<?php
$student=["Nahid bin Azhar",34,"Dhaka,Bangladesh"];
extract($student,EXTR_PREFIX_ALL,"a");
echo "Name: $a_0, Age: $a_1, Address: $a_2";
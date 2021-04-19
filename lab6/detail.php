<?php

required_once("./Employee.php");
required_once("./Company.php");
$gces = new Company;
$gces->name = "Gandaki collage of engineering and science";
$gces->address = "lamachour , pokhara-16";

array_push($gces->employees,new Employee("sumin", "lamchour") );
	var_dump($gces);

?>
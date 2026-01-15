<?php 
require_once "functions.php";
//$x = "Kaķēni";

dd(isset($x));
$y = isset($x) ? $x : "Ups!";
dd($y);
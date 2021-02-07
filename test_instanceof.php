<?php 
//use of instanceof
require 'instanceof.php';

$a = new A();
$b = new B();

if($b instanceof  B){
	$b->hard();
}

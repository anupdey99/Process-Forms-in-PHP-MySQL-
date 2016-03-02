<!DOCTYPE html>
<?php
// 
header ("Location: myform.php?msg=0");
//
function f_hasEmptyField($field){
	
	if(!isset($field) || trim($field) == '')
{
	return true;
}
	return false;
}



?>
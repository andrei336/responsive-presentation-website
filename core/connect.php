<?php
$db = new mysqli('localhost','root','','presentation_website');
if($db->connect_errno){
	die('<span style="color:green">Sorry, we are having some problens...</span><br>
	<span style="color:red">Error no.: '.$db->connect_errno.' - '.$db->connect_error.'</span>');
}/* else{
	echo 'Ok! I\'m online.';
} */
<?php
//set var $page;
//--------------
if(!isset($_GET['page'])){
	$page = 'home';
}
elseif(isset($_GET['spage'])){
	$sp = $_GET['spage'];
	$interrogation = $db->query("SELECT COUNT(`page_id`) FROM `pages` WHERE `page_name` = '$sp'");
	$result = $interrogation->fetch_row();
	$count = $result[0];
		
	$count == 0 ? $page = '404_ERROR' : $page = $_GET['spage'];
}
else{
	if(isset($_GET['page'])){
		$p = $_GET['page'];
		$interrogation = $db->query("SELECT COUNT(`page_id`) FROM `pages` WHERE `page_name` = '$p'");
		$result = $interrogation->fetch_row();
		$count = $result[0];
			
		$count != 0 ? $page = $_GET['page'] : $page = '404_ERROR';
	}
}
//set var $current_page;
//--------------
$current_page = explode('/', $_SERVER['SCRIPT_NAME']);
$current_page = end($current_page);
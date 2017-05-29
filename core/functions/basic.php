<?php
//OK! Work
function site_settings($db, $site_item){
	$interrogation = $db->query("SELECT `$site_item` FROM `settings`");
	$item_set = $interrogation->fetch_object();
	
	return $item_set->$site_item; 
}
//--------------------
//OK! Work
function page_settings($db, $page, $page_item){
	$interrogation = $db->query("SELECT `$page_item` FROM `pages` WHERE `page_name` = '$page'");
	$item_set = $interrogation->fetch_object();
	
	return $item_set->$page_item;
}
//--------------------
//OK! Work
function menu($db, $parent_id = 0) {
	$int1 = $db->query("
		SELECT 	menu.id, menu.page_id, menu.parent_id, menu.order_menu, menu.show_menu,
				pages.page_id, pages.page_name, pages.page_title
		FROM menu INNER JOIN pages
		ON menu.page_id = pages.page_id
		WHERE parent_id = '$parent_id'
		AND `show_menu` = 1
		ORDER BY `order_menu` ASC
	");
	
	$int2 = $db->query("SELECT page_name FROM pages WHERE page_id = '$parent_id'");
	$p = $int2->fetch_object();
	
	if($int1->num_rows > 0) {
		
		while($menu_item = $int1->fetch_object()){
			if($menu_item->parent_id == 0){
				$adr = $menu_item->page_name;
			}else{
				$adr = $p->page_name.'&spage='.$menu_item->page_name;
			}
			echo '<li><a href="?page=',$adr,' ">',$menu_item->page_name,'</a><ul>';
				menu($db, $menu_item->page_id);
			echo '</ul></li>'; 
		}
	}
}
//--------------------
function get_page($db, $page){
	if(file_exists('pages/'.$page.'.php')){
		include 'pages/'.$page.'.php';
	}else if (file_exists('users/'.$page.'.php')){
		include 'users/'.$page.'.php';
	}else{
		$interrogation = $db->query("SELECT COUNT(`page_id`) FROM `pages` WHERE `page_name` = '$page'");
		$result = $interrogation->fetch_row();
		$count = $result[0];
		
		if($count == 0) $page = '404_ERROR';
		else $page = $page;
				
		$interrogation = $db->query("SELECT `body` FROM `pages` WHERE `page_name` = '$page' LIMIT 1");
		$body = $interrogation->fetch_object();
		
		echo $body->body;
		
		//$db->close();
	}
}
?>
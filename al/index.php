<?php
//require 'core/ini.php';

?>
<!-- start header -->
<!doctype html>
<html lang="ro-Ro<?php //echo site_settings($db, 'lang'); ?>">
<head>
	<meta charset="<?php  //echo site_settings($db,'charset'); ?>">
	<title>Overwiev<?php//echo page_settings($db, $page, 'page_title'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php //echo page_settings($db, $page, 'page_description'); ?>" />
	<meta name="keywords" content="<?php //echo page_settings($db, $page, 'page_keywords') ?>" />
	<meta name="owner" content="<?php  //echo site_settings($db,'owner'); ?>" />
	<meta name="author" content="Al" />
	<link rel="icon" type="image/png" href="style/images/<?php //echo site_settings($db, 'favicon'); ?>">
	<!-- <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css"> -->
	<link rel="stylesheet" href="../style/al.css">
	<link rel="stylesheet" href="../style/style.css">
	<script type="text/javascript">
	function clock() {
		var Digital = new Date()
		var hours 	= Digital.getHours()
		var minutes	= Digital.getMinutes()
		var seconds	= Digital.getSeconds()
		if (minutes <= 9)
			minutes = "0"+minutes
		if (seconds <= 9)
			seconds = "0"+seconds

		show_clock = "<time>"+hours+":"+minutes+":"+seconds+"</time>"
		document.getElementById("clock").innerHTML = show_clock
		setTimeout("clock()",1000)
	}
	window.onload = clock;
	</script>
</head>
<body>
	<header class="al-container-flexible">
				header------------------------------------mag----login----????----
	</header><!-- /header -->
	<main>
	<div class="content al-container">
		<?php //aside_left($db); ?>
		<aside class="left al-col-03m al-col-02s al-p-0">
			<nav class="al-container-flexible">
				<div class="al-navbar al-navbar-side al-bgc-dark-grey">
					<div class="al-navbar-handle"><span class="fa fa-navicon">Meniu</span></div>
					<div class="al-navbar-title" id="clock"></div>
					<ul class="al-bgc-red">
						<li><a href="">Home</a></li>
						<li><a href="">Settings</a></li>
						<li><a href="">Category</a></li>
						<li><a href="">Pages</a></li>
						<li><a href="">Article</a></li>
						<li><a href="">Users</a></li>
						<li><a href="">Something...</a></li>
						<li><a href="">Something...</a></li>
						<li><a href="">Something...</a></li>
					</ul>
				</div><!-- /al-navbar -->
			</nav><!-- /nav -->
		</aside>
		<section class="al-col-09m">
			<div class="title"><h1>Overwiev<?php  //echo page_settings($db,$page, 'page_title'); ?></h1></div>
<!-- end header -->
<!-- ========================== -->
<!-- start page -->
		<?php //get_page($db, $page); ?>
			<article>
				<h3>Introducere</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, cupiditate aperiam repudiandae provident magnam minima dolore, ad dolorum perspiciatis officia tempore illo sit reprehenderit ratione. Aut vitae temporibus itaque dolores.</p>
				<p>Adipisci accusantium cumque, sunt quia excepturi soluta, est nobis ipsum minus, minima dolore voluptatibus explicabo reiciendis officiis? Illo, commodi. Natus consequuntur soluta, eligendi dolore repellendus. Modi cumque veniam molestias quisquam.</p>
			</article>
			<article>
				Oferta transport
				<p>Perferendis provident quibusdam rerum velit beatae blanditiis atque voluptate a ipsum perspiciatis repudiandae, odio, fugit odit, vel, itaque repellat officia neque impedit suscipit reprehenderit hic sint ex. Sunt, asperiores, dolore.</p>
				<p>Natus odio aperiam quo beatae enim amet, obcaecati rerum earum! Amet inventore, eaque autem esse, ipsam a expedita sed itaque qui non sequi laudantium molestias laboriosam illo aut quos magni.</p>
			</article>
			<article>
				Produse recomandate
				<p>Perferendis provident quibusdam rerum velit beatae blanditiis atque voluptate a ipsum perspiciatis repudiandae, odio, fugit odit, vel, itaque repellat officia neque impedit suscipit reprehenderit hic sint ex. Sunt, asperiores, dolore.</p>
				<p>Natus odio aperiam quo beatae enim amet, obcaecati rerum earum! Amet inventore, eaque autem esse, ipsam a expedita sed itaque qui non sequi laudantium molestias laboriosam illo aut quos magni.</p>
			</article>
<!-- end page -->
<!-- ========================== -->
<!-- start footer -->
		</section>
	</div><!-- /content al-container -->
	</main>
	<footer class="al-container-flexible">
		copyright&copy; - <?php  echo date('Y') ?> - <?php  //echo site_settings($db, 'copyright'); ?>
	</footer><!-- /al-container-flexible -->
</body>
</html>
<!-- end footer -->













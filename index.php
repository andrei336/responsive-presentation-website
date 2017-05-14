<?php
require 'core/ini.php';

?>
<!-- start header -->
<!doctype html>
<html lang="<?php echo site_settings($db, 'lang'); ?>">
<head>
	<meta charset="<?php  echo site_settings($db,'charset'); ?>">
	<title><?php echo page_settings($db, $page, 'page_title'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo page_settings($db, $page, 'page_description'); ?>" />
	<meta name="keywords" content="<?php echo page_settings($db, $page, 'page_keywords') ?>" />
	<meta name="owner" content="<?php  echo site_settings($db,'owner'); ?>" />
	<meta name="author" content="Al" />
	<link rel="icon" type="image/png" href="style/images/<?php echo site_settings($db, 'favicon'); ?>">
	<!-- <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css"> -->
	<link rel="stylesheet" href="style/al.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
	<div class="al-container-flexible">
		sus - <?php echo $current_page; ?>
	</div><!-- /al-container-flexible -->
	<header class="al-container-flexible">
				header
	</header><!-- /header -->
	<nav class="al-container-flexible">
		<div class="al-navbar al-navbar-top al-navbar-large al-navbar-extend al-bgc-dark-grey">
			
			<div class="al-navbar-header">
				<div class="al-navbar-title">-All-</div>
				<div class="al-navbar-handle"><span class="fa fa-navicon"></span></div>
			</div>
			<ul class="al-right al-bgc-red">
			<?php menu($db, $parent_id = 0); ?>
			</ul>
		</div><!-- /al-navbar -->
	</nav><!-- /nav -->
	<main>
	<div class="promo al-container al-hidden">
		<div class="stik al-col-03s">
			<div class="stik-content">
				<span class="al-txt-red">NU</span> pierde<br><span class="al-txt-red">SUPER OFERTA!!!</span>
			</div>
		</div>
		<div class="al-col-05m al-col-06s">
			<div class="txt">
				<p>La trei pizza comandate primesti una gratis!</p>
				<p>Suna acum la numerele:</p>
				<p>0721847862, 0765788600, 0214501880</p>
			</div>
		</div>
		<div class="al-col-04m al-col-06s">
			<div class="img">
				<img src="images/oferte/oferta_pizza01.png" alt="la trei pizza una GRATUIT" title="la trei pizza una GRATUIT">
			</div>
		</div>
	</div><!-- /promo al-container -->
	<div class="content al-container">
		<?php //aside_left($db); ?>
		<aside class="left al-col-03m al-col-02s al-p-0">
			<div class="widget">
				Add "menu" or... else
				Possimus, cupiditate aperiam repudiandae provident magnam minima dolore, ad dolorum perspiciatis officia tempore illo sit reprehenderit ratione. Aut vitae temporibus itaque dolores.
			</div>
			<div class="widget">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, cupiditate aperiam repudiandae provident magnam minima dolore, ad dolorum perspiciatis officia tempore illo sit reprehenderit ratione. Aut vitae temporibus itaque dolores.
			</div>
		</aside>
		<section class="al-col-06m al-col-08s">
			<div class="title"><h1><?php  echo page_settings($db,$page, 'page_name'); ?></h1></div>
<!-- end header -->
<!-- ========================== -->
<!-- start page -->
		<!-- <article> -->
			<!-- <span class="al-txt-blue">Continutul pagini:</span> -->
			<?php get_page($db, $page); ?>
		<!-- </article> -->
<!-- end page -->
<!-- ========================== -->
<!-- start footer -->
		</section>
		<?php //if(page_design() == 3){ include 'includes/leyout/aside_right.php';}?>
		<aside class="right al-col-04s al-col-03m al-p-0">
			<div class="widget">
				Program:
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, cupiditate aperiam repudiandae provident magnam minima dolore, ad dolorum perspiciatis officia tempore illo sit reprehenderit ratione.</p>
			</div>
			<div class="widget">
				Curs valutar:
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, cupiditate aperiam repudiandae provident magnam minima dolore, ad dolorum perspiciatis officia tempore illo sit reprehenderit ratione.</p>
			</div>
			<div class="widget">
				Starea vremii:
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, cupiditate aperiam repudiandae provident magnam minima dolore, ad dolorum perspiciatis officia tempore illo sit reprehenderit ratione.</p>
			</div>
		</aside>
	</div><!-- /content al-container -->
	</main>
	<footer class="al-container-flexible">
		copyright&copy; - <?php  echo date('Y') ?> - <?php  echo site_settings($db, 'copyright'); ?>
	</footer><!-- /al-container-flexible -->
<script>
		$('.al-navbar-handle').on('click', function(){
			$('.al-navbar-top ul').toggleClass('al-navbar-show');
		});
	</script>
</body>
</html>
<!-- end footer -->



<!--
<ul class="al-right al-bgc-red">
	<li><a href="?page=home">Home</a></li>
	<li><a href="?page=meniuri">Meniuri</a>
		<ul class="al-right al-bgc-red">
			<li><a href="?page=pizza">Pizza</a></li>
			<li><a href="?page=fast_food">Fast food</a></li>
		</ul>
	</li>
	<li><a href="?page=sugestii">Sugestii</a></li>
	<li><a href="?page=contact">Contact</a></li>
</ul>
-->
<!--
<ul class="al-right al-bgc-red">
	<li><a href="?page=home">Home</a><ul></ul></li>
	<li><a href="?page=meniu">Meniu</a>
		<ul>
			<li><a href="?page=pizza">Pizza</a><ul></ul></li>
			<li><a href="?page=fast_food">Fast food</a><ul></ul></li>
		</ul>
	</li>
	<li><a href="?page=sugestii">Sugestii</a><ul></ul></li>
	<li><a href="?page=contact">Contact</a><ul></ul></li>			
</ul>
-->













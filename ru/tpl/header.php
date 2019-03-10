<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Питомник ORAH &bull; Добро пожаловать!</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="Keywords" content="orah, rasadnik, subotica, voćke, vocke, sadnice, jabuka, kruška,
   kruska, dunja, mušmula, musmula, breskva, nektarina, kajsija, šljiva, sljiva, trešnja, tresnja,
   višnja, visnja, orah, leska, lešnik, lesnik, badem, dren, ribizla, josta, ogrozd, dud,
   kalemljenje, sadnja, voće, voce, zasad, seme"/>
	<meta name="Author" content="Небојша Камбер - Nebojša Kamber - www.nebojsa.in.rs -
   kamber@nebojsa.in.rs"/>
	<link rel="stylesheet" type="text/css" href="/css/common.css"/>
	<link href="https://fonts.googleapis.com/css?family=Philosopher:regular" rel="stylesheet"
	      type="text/css"/>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="/js/common.js"></script>
	<meta name="google-site-verification" content="Y8oLDITL8ikyf3uZX1Mda_xnnXg9_PiC5elAcIvgNrQ"/>
	<link rel="icon" type="photo/o8CltRtuIQg8Kz0RCfsZDQ?feat=directlink" href="/favicon.ico"/>
	<link rel="icon" type="image/png" href="/gfx/favicon.png" />
	<link rel="icon" type="photo/o8CltRtuIQg8Kz0RCfsZDQ?feat=directlink" href="/favicon.ico"/>
	<link rel="icon" type="image/png" href="/gfx/favicon.png"/>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109562370-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-109562370-1');
	</script>
</head>
<body class="bg4">

<p id="top">
	<a name="vrh">
		<img src="/gfx/logo-rs.png" alt="Memorandum"/>
	</a>
</p><!--#top-->
<img id="topOver" src="/gfx/logo-rs-bottom.png" alt=""/>

<ul id="info">
	<li id="phone">
		<a href="tel:+38124753770">+381 24 753 770</a>
	</li>
	<li id="mobile">
		<a href="tel:+381628400266">+381 62 84 00 266</a>
	</li>
	<li id="mail">
		<a href="mailto:kontakt@orah.rs">kontakt@orah.rs</a>
	</li>
</ul><!--#info-->

<ul id="lang" dir="rtl">
	<li id="rs">
		<a href="/">Srpski</a>
	</li>
	<li id="hu">
		<a href="/index.hu.php">Magyar</a>
	</li>
	<li id="en">
		<a href="/index.en.php">English</a>
	</li>
	<li id="de">
		<a href="/index.de.php">Deutsch</a>
	</li>
</ul><!--#lang-->

<?php
$navigationItems = array(
	'sorts' => array(
		'jabuka-standardna' => 'Стандартное яблоко',
		'jabuka-stubasta' => 'Яблоко соломы',
		'jabuka-autohtone' => 'Автохтонные сорта яблоко',
		'kruska' => 'Груша',
		'dunja-musmula' => 'Айва и мушмула',
		'breskva-nektarina' => 'Персик и нектарины',
		'kajsija' => 'Абрикос',
		'sljiva' => 'Слива',
		'tresnja-visnja' => 'Вишня и черешня',
		'orah-leska-badem' => 'Орех, фундук и миндаль',
		'dren' => 'Кизил',
		'ribizla-josta-ogrozd' => 'Смородины, крыжовник',
		'dud' => 'Шелковица',
		'stubaste-i-patuljaste-forme' => 'Формы стерни и карлики'
	),
	'agroTechnics' => array(
		'sadnja' => 'Насаждение',
		'zastita' => 'Защита саженцев',
		'slike' => 'Фотогалерея'
	),
	'sales' => array(
		'posta' => 'Заказ по почте',
		'email' => 'Заказы через Интернет'
	)
);

/**
 * @param string $title
 * @param string $key
 * @return string
 */
function generateNavigationItem($key,$title){
	$isCurrent = stripos($_SERVER['PHP_SELF'], $key.'.php');

	return '<li><a '.($isCurrent ? 'class="current"' : '' ).' href="/ru/'.$key.'.php">'.$title.'</a></li>';
}
?>
<ul id="nav">
	<?= generateNavigationItem('onama','О нас') ?>

	<li id="sorte" class="hasSub">
		<a href="#">Сортиментов</a>
		<ul class="sub">
			<?php
			foreach ($navigationItems['sorts'] as $key => $title) {
				echo generateNavigationItem($key,$title);
			}
			?>
		</ul>
	</li>

	<li id="agroTehnika" class="hasSub">
		<a href="#">Агротехника</a>
		<ul class="sub">
			<?php
			foreach ($navigationItems['agroTechnics'] as $key => $title) {
				echo generateNavigationItem($key,$title);
			}
			?>
		</ul>
	</li>

	<li id="prodaja" class="hasSub">
		<a href="#">Продажа</a>
		<ul class="sub">
			<?php
			foreach ($navigationItems['sales'] as $key => $title) {
				echo generateNavigationItem($key,$title);
			}
			?>
		</ul>
	</li>

	<?= generateNavigationItem('kontakt','Контакт') ?>
</ul><!--#nav-->
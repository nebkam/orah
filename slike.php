<?php
 $male_slike    = array();
 $velike_slike  = array();
 
 foreach (new DirectoryIterator('gfx/photo/mini') as $fileInfo) {
  if($fileInfo->isDot()) continue;
  // ^ Izuzima . i ..
  if($fileInfo->isDir()) continue;
  // ^ Izuzima fascikle
  $male_slike[] = $fileInfo->getFilename();
 }
 
 foreach (new DirectoryIterator('gfx/photo/large') as $fileInfo) {
  if($fileInfo->isDot()) continue;
  // ^ Izuzima . i ..
  if($fileInfo->isDir()) continue;
  // ^ Izuzima fascikle
  $velike_slike[] = $fileInfo->getFilename();
 }
 
 $HTML_stavka = 
 '<li>
   <div class="thumb fancybox">
    <a href="/gfx/photo/large/%s" target="_blank" rel="gallery">
     <img src="/gfx/photo/mini/%s" alt="" />
    </a>
   </div>
  </li>';
 $HTML_stavka_nema_velike = 
 '<li>
   <div class="thumb">
    <img src="/gfx/photo/mini/%s" alt="" />
    <span>&nbsp;</span>
   </div>
  </li>';
  
sort($male_slike, SORT_NUMERIC);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Rasadnik ORAH &bull; Galerija slika</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="Keywords" content="orah, rasadnik, subotica, voćke, vocke, sadnice, jabuka, kruška,
   kruska, dunja, mušmula, musmula, breskva, nektarina, kajsija, šljiva, sljiva, trešnja, tresnja,
   višnja, visnja, orah, leska, lešnik, lesnik, badem, dren, ribizla, josta, ogrozd, dud,
   kalemljenje, sadnja, voće, voce, zasad, seme" />
  <meta name="Author" content="Небојша Камбер - Nebojša Kamber - www.nebojsa.in.rs - 
   kamber@nebojsa.in.rs" /> 
  <link rel="stylesheet" type="text/css" href="/css/common.css" />
  <link  href="http://fonts.googleapis.com/css?family=Philosopher:regular" rel="stylesheet"
   type="text/css" />
  <link rel="stylesheet" href="/css/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript" src="/js/jquery.fancybox-1.3.4.pack.js"></script>
  <script type="text/javascript" src="/js/common.js"></script> 
  
 <link rel="icon" type="photo/o8CltRtuIQg8Kz0RCfsZDQ?feat=directlink" href="/favicon.ico" />   <link rel="icon" type="image/png" href="/gfx/favicon.png"></link>  </head>
 <body class="bg3">
 
  <p id="top">
   <a href="/" name="vrh">
    <img src="/gfx/logo-rs.png" alt="Memorandum" />
   </a>
  </p><!--#top-->
  <img id="topOver" src="/gfx/logo-rs-bottom.png" alt="" />
  
  <ul id="info">
   <?php include('inc/ul.info.html') ?>
  </ul><!--#info-->
  
  <ul id="lang" dir="rtl">
   <?php include('inc/ul.lang.rs.html') ?>
  </ul><!--#lang-->
  
  <ul id="nav">
   <li id="oNama">
    <a href="/">O nama</a>
   </li>
   <li id="sorte" class="hasSub">
    <a href="#">Sortimenti</a>
    <ul class="sub">
     <li>
      <a href="/jabuka-standardna.php">Standardna jabuka</a>
     </li>
     <li>
      <a href="/jabuka-stubasta.php">Stubasta jabuka</a>
     </li>
     <li>
      <a href="/jabuka-autohtone.php">Autohtone sorte jabuke</a>
     </li>
     <li>
      <a href="/kruska.php">Kruška</a>
     </li>
     <li>
      <a href="/dunja-musmula.php">Dunja i mušmula</a>
     </li>
     <li>
      <a href="/breskva-nektarina.php">Breskva i nektarina</a>
     </li>
     <li>
      <a href="/kajsija.php">Kajsija</a>
     </li>
     <li>
      <a href="/sljiva.php">Šljiva</a>
     </li>
     <li>
      <a href="/tresnja-visnja.php">Trešnja i višnja</a>
     </li>
     <li>
      <a href="/orah-leska-badem.php">Orah, leska i badem</a>
     </li>
     <li>
      <a href="/dren.php">Dren</a>
     </li>
     <li>
      <a href="/ribizla-josta-ogrozd.php">Ribizla, josta i ogrozd</a>
     </li>
     <li>
      <a href="/dud.php">Dud</a>
     </li>
     <li>
      <a href="/stubaste-i-patuljaste-forme.php">Stubaste i patuljaste forme</a>
     </li>
    </ul>
   </li>
   <li id="agroTehnika" class="hasSub">
    <a href="#">Agrotehnika</a>
    <ul class="sub">
     <li>
      <a href="/sadnja.php">Sadnja</a>
     </li>
     <li>
      <a href="/zastita.php">Zaštita sadnica</a>
     </li>
     <li>
      <a class="current">Galerija slika</a>
     </li>
    </ul>
   </li>
   <li id="prodaja" class="hasSub">
    <a href="#">Prodaja</a>
    <ul class="sub">
     <li>
      <a href="/posta.php">Narudžbina poštom</a>
     </li>
     <li>
      <a href="/email.php">Online narudžbina</a>
     </li>
    </ul>
   </li>
   <li id="kontakt">
    <a href="/kontakt.php">Kontakt</a>
   </li>
  </ul><!--#nav-->
  
  <div id="content" class="slike">
   <ul>
     <?php
      // Generate thumbnail list
      foreach($male_slike as $naziv) {
       if( in_array($naziv, $velike_slike) ){
        printf($HTML_stavka, $naziv, $naziv, $naziv);
       } else {
        printf($HTML_stavka_nema_velike, $naziv);
       }
      }
     ?>
   </ul>
   <div style="clear:both"></div>
   <a class="toVrh soft" href="#vrh">Vrh strane</a>
  </div><!--#content-->
  
  <ul id="copy">
   <?php include('inc/ul.copy.html') ?>
  </ul><!--#copy-->
  
 </body>
</html>

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
  <title>Nursery ORAH &bull; Picture Gallery</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="Keywords" content="orah, rasadnik, subotica, voćke, vocke, sadnice, jabuka, kruška,
   kruska, dunja, mušmula, musmula, breskva, nektarina, kajsija, šljiva, sljiva, trešnja, tresnja,
   višnja, visnja, orah, leska, lešnik, lesnik, badem, dren, ribizla, josta, ogrozd, dud,
   kalemljenje, sadnja, voće, voce, zasad, seme" />
  <meta name="Author" content="Небојша Камбер - Nebojša Kamber - www.nebojsa.in.rs - 
   kamber@nebojsa.in.rs" /> 
  <link rel="stylesheet" type="text/css" href="/css/common.css" />
  <link  href="https://fonts.googleapis.com/css?family=Philosopher:regular" rel="stylesheet"
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
   <?php include('inc/ul.info.en.html') ?>
  </ul><!--#info-->
  
  <ul id="lang" dir="rtl">
   <?php include('inc/ul.lang.en.html') ?>
  </ul><!--#lang-->
  
  <ul id="nav">
   <li id="oNama">
    <a href="/index.en.php">About Us</a>
   </li>
   <li id="sorte" class="hasSub">
    <a href="#">Sortiments</a>
    <ul class="sub">
     <li>
      <a href="/jabuka-standardna.en.php">Standard Apple</a>
     </li>
     <li>
      <a href="/jabuka-stubasta.en.php">Columnar Apple</a>
     </li>
     <li>
      <a href="/jabuka-autohtone.en.php">Indigenous Apple Varieties</a>
     </li>
     <li>
      <a href="/kruska.en.php">Pear</a>
     </li>
     <li>
      <a href="/dunja-musmula.en.php">Quince &amp; Medlar</a>
     </li>
     <li>
      <a href="/breskva-nektarina.en.php">Peach &amp; Nectarine</a>
     </li>
     <li>
      <a href="/kajsija.en.php">Apricot</a>
     </li>
     <li>
      <a href="/sljiva.en.php">Plum</a>
     </li>
     <li>
      <a href="/tresnja-visnja.en.php">Cherry &amp; Sour Cherry</a>
     </li>
     <li>
      <a href="/orah-leska-badem.en.php">Walnut, Hazelnut &amp; Almond</a>
     </li>
     <li>
      <a href="/dren.en.php">Cornel</a>
     </li>
     <li>
      <a href="/ribizla-josta-ogrozd.en.php">Currant, Gooseberry &amp; Jost</a>
     </li>
     <li>
      <a href="/dud.en.php">Mulberry</a>
     </li>
     <li>
      <a href="/stubaste-i-patuljaste-forme.en.php">Columnar &amp; Dwarf Forms</a>
     </li>
    </ul>
   </li>
   <li id="agroTehnika" class="hasSub">
    <a href="#">Agrotechnics</a>
    <ul class="sub">
     <li>
      <a href="/sadnja.en.php">Planting</a>
     </li>
     <li>
      <a href="/zastita.en.php">Protection of Seedlings</a>
     </li>
     <li>
      <a class="current">Picture Gallery</a>
     </li>
    </ul>
   </li>
   <li id="prodaja" class="hasSub">
    <a href="#">Sale</a>
    <ul class="sub">
     <li>
      <a href="/posta.en.php">Order by Mail</a>
     </li>
     <li>
      <a href="/email.en.php">Order Online</a>
     </li>
    </ul>
   </li>
   <li id="kontakt">
    <a href="/kontakt.en.php">Contact</a>
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
   <a class="toVrh soft" href="#vrh">Top</a>
  </div><!--#content-->
  
  <ul id="copy">
   <?php include('inc/ul.copy.en.html') ?>
  </ul><!--#copy-->
  
 </body>
</html>

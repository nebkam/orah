<?php
/*
error_reporting(E_ALL);
ini_set("display_errors", 1);

 include('../mail-cfg.php');
 // ^ Email parameters
 
 // Include Swift Mailer library for sending Emails:
 require_once 'inc/Swift-4.0.6/lib/swift_required.php';
 // Create the Transport:
 $transport = Swift_SmtpTransport::newInstance(SMTP_SRVR, 25)
  ->setUsername(SMTP_USER)
  ->setPassword(SMTP_PASS)
  ;
 // Create the Mailer using your created Transport:
 $mailer = Swift_Mailer::newInstance($transport);
 // Create the message:
 $message = Swift_Message::newInstance('Kontakt sa sajta')
  // Set the From address with an associative array:
  ->setFrom(array('webmaster@orah.rs' => 'Orah.rs'))
  // Set the To addresses with an associative array:
  ->setTo(array('kamber@nebojsa.in.rs' => 'Nebojša Kamber'))
  // Give it a body:
  ->setBody('Tekst poruke')
  // And optionally an alternative body:
  ->addPart('<q>HTML tekst poruke</q>', 'text/html')
  // Optionally add any attachments:
  //->attach(Swift_Attachment::fromPath('my-document.pdf'))
  ;
 //Send the message
 $result = $mailer->send($message);
 print_r($result);
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Rasadnik ORAH &bull; Online naručivanje sadnica</title>
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
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript" src="/js/common.js"></script>
  <style type="text/css">
  div#content p {
  ;margin-bottom:30px
  }
  </style>
 <link rel="icon" type="photo/o8CltRtuIQg8Kz0RCfsZDQ?feat=directlink" href="/favicon.ico" />   <link rel="icon" type="image/png" href="/gfx/favicon.png"></link>  </head>
 <body class="bg4">
 
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
      <a href="/slike.php">Galerija slika</a>
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
      <a class="current">Online narudžbina</a>
     </li>
    </ul>
   </li>
   <li id="kontakt">
    <a href="/kontakt.php">Kontakt</a>
   </li>
  </ul><!--#nav-->
  
  <div id="content" class="posta">
   <p class="paraM">
    olimo Vas da popunite sledeći formular, na osnovu kog će Vas naša služba prodaje kontaktirati 
    i definisati porudžbinu, prema vrsti i broju sadnica koje imamo u prodaji.
   </p>
   <form>
    <label>Vaše ime i prezime
     <input id="ime" name="ime" type="text" tabindex="1" />
    </label>
    <label>Vaša adresa
     <input id="adresa" name="adresa" type="text" tabindex="2" />
    </label>
    <label>Mesto
     <input id="mesto" name="mesto" type="text" tabindex="3" />
    </label>
    <label>Poštanski broj
     <input id="pbroj" name="pbroj" type="text" tabindex="4" />
    </label>
    <label>Država
     <input id="drzava" name="drzava" type="text" tabindex="5" />
    </label>
    <label>Email
     <input id="email" name="email" type="text" tabindex="6" />
    </label>
    <label>Telefon
     <input id="tel" name="tel" type="text" tabindex="7" />
    </label>
    <label>Ovde upišite vrstu i broj sadnica za koje ste zainteresovani iz kataloga.
     <br />Sve vaše sugestije i pitanja su dobrodošla.
     <textarea tabindex="8" rows="5" cols="40"></textarea>
    </label>
    <input type="submit" tabindex="9" value="Pošalji" />
   </form>
   <a class="toVrh soft" href="#vrh" title="Vrh strane">&nbsp;</a>
  </div><!--#content-->
  
  <ul id="copy">
   <?php include('inc/ul.copy.html') ?>
  </ul><!--#copy-->

 </body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head> 
<meta charset="utf-8"> 
<meta http-equiv=Content-Type content="text/html;">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<title>About Graham - Apple IT support, experience and skills</title>

<link rel="stylesheet" href="../GB/css/style.css" media="all">

<style type="text/css"></style>

<script type="text/javascript" src="../GB/js/jquery.js"></script>
<script type="text/javascript" src="../GB/js/jquery.lightbox-0.5.js"></script>


</head>


<body>



<img class="logo" src="Smile-logo-for-web-branding.png" alt= "smileitworks">
<br><br>

<div id="intro">
<p>
This page is my on-line CV, a detailed overview of my skills and experience, with real examples.
If you need to know more or would like to employ me to help you or your business please get in  <a href="mailto:graham@smileitworks.com">touch.</a>
</p>
</div>

<div id="container" class="centred">

 
  <div class="box col3 gbsupport">
  <b>support</b><br>
  <?php include("../GB/Blocks/txt-1-support.html"); ?>
   </div>
  
  <div class="box col2 gb3d">
  <b>3D</b><br>
  Packaging visualisation:<br>
  
  <div class="jquery-lightbox">
  <a href="../GB/images/3d-batiste.jpg"><img src="../GB/images/3d-batiste-thumb.jpg" alt="3d can render" /></a>
  </div>
  
  </div>
  
  
  <div class="box col2 gbsupport">
  <b>support</b><br>
  I passed an <strong>ACMT.</strong><br>
  This is the same qualification as all the Apple Genius bar people have. <br>
  I passed with 97% if it makes a difference. . <br>
  <img src="../GB/images/ACMT.png" alt="Apple Mac certification logo" /><br>

  </div>
  
  <div class="box col2 gbweb">
  <b>web</b><br>
  <?php include("../GB/Blocks/txt-1-about.html"); ?>
  </div>
  
  <div class="box col2 gbweb">
  <b>web</b><br><br>
  <a href="http://www.thecircusproject.co.uk" target="_blank"><img src="../GB/images/TCP.jpg" alt="3d can render" /></a>
    
  </div>
  
</div>


<!-- Vanilla Masonry script -->

<script src="../GB/js/masonry.min.js"></script>
<script>

window.onload = function() {
  var wall = new Masonry( document.getElementById('container'), {
    columnWidth: 50
  });
};

</script>

<!-- Lightbox script -->
<script type="text/javascript">
$(function() {

	$('#gallery a').lightBox(); // Select all links in object with gallery ID

});
</script>



<?php include_once("../GB/gbfooter.php"); ?>

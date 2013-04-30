<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<!-- Google Fonts - link to Roboto Condensed font -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700,400italic,300italic' rel='stylesheet' type='text/css'>

<meta charset="utf-8"> 
<meta http-equiv=Content-Type content="text/html;">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<title>welcome to gbartwork</title>

<link rel="stylesheet" href="css/style.css" media="all">

<style type="text/css"></style>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>

<!-- Masonry - required -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="js/jquery.masonry.min.js"></script>



</head>



<body>

<!-- Nav area -->
<div id="logo">
<a href="index.php"><img src="images/gbartwork-logo.png" alt= "gbartwork"></a>
</div>

<div id="intro">
<ul>

<li><a href="artwork.php">artwork</a></li>
<li><a href="web.php">web services</a></li>
<li><a href="contact.php">contact</a></li>
<li><a href="blog.php">blog</a></li>
<li><a href="client.php">client login</a></li>

</ul>
</div>

<!-- END - Nav area -->


<!-- Main Body (grey) area -->

<div id="container" class="centred">


<!-- BOX - intro -->
   <div class="box col5 boxhead">
  <b>hello!</b><br>
  <p>
  <?php include("Blocks/txt-1-about.html"); ?>
  </p>
  </div>
  
 <!-- BOX - Services -->
   <div class="box col2 boxhead">
  <b>services:</b><br>
  <p>
  <?php include("Blocks/txt-1-services.html"); ?>
  </p>
  </div>
  
 
<!-- BOX - TWITTER -->
  <div class="box col2 boxhead">
  <b>smile twitter feed:</b>  
  <p>latest posts</p>
  <span id="twitter-wrap"> 
		<ul id="twitter_update_list"></ul> 
		<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script> 
		<script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/smileitworks.json
		callback=twitterCallback2&count=3"></script>
		<a href="http://twitter.com/smileitworks">see more</a>
	</span>
	</div>
  
<!-- BOX - web services -->
  <div class="box col2 boxhead">
  <b>web services</b><br>
  <p>
  <strong>Portfolio: website design & development</strong><br>
  
  See more in our <a href="web.php"> website services </a>section<br><br>
  <a href="http://www.thecircusproject.co.uk" target="_blank"><img src="images/TCP.jpg" alt="3d can render" /></a>
   </p> 
  </div>
  
  
<!-- BOX - 3d visualising -->
  <div class="box col4 boxhead">
  <b>3D visualising</b><br>
  <p>
  <strong>Packaging visuals</strong><br>
  
  See more in our artwork section<br>
  <br>
  Working with artwork files we can generate accurate visuals of how your packaging will look. Useful for research.<br><br>
  <a href="artwork.php"><img src="images/UK-Cokex3-thumb.jpg" alt="Coke 3d can render" /> </a>
   </p> 
  </div>  
  
  
  
  <!-- BOX - Contact us -->
  <div class="box col2 blackbox boxhead">
  <b>contact us</b><br>
  <p>
  <strong>phone:</strong><br>
  01273 778320<br>
  <strong>e-mail:</strong><br>
  <a href= "mailto:hello@gbartwork.com?subject= website enquiry" >hello@gbartwork.com</a> <br>

  
  </p> 
  </div>
  
  
  
  
  
  
</div><!-- END - Main Body (grey) area -->




<div>

<?php include_once("gbfooter.php"); ?>

</div>


<!-- Vanilla Masonry script -->
<script>
var $container = $('#container');
$container.imagesLoaded(function(){
  $container.masonry({
    itemSelector : '.box',
    columnWidth : 10,
  });
});

</script>

<!-- Lightbox script -->
<script type="text/javascript">
$(function() {

	$('#gallery a').lightBox(); // Select all links in object with gallery ID

});
</script>



</body>



</html>
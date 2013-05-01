<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<!-- Google Fonts - link to Muli Condensed font -->
<link href='http://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>

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



<body class="home">

<!-- Nav area -->

  <?php include("top-nav.php"); ?>

<!-- END - Nav area -->


<!-- Main Body (grey) area -->

<div id="container" class="centred">


<!-- BOX - intro -->
   <div class="box col5">
 <p class="boxhead "> hello!<br></p>
  <p>
  <?php include("Blocks/txt-1-about.html"); ?>
  </p>
  </div>
  
 <!-- BOX - Services -->
   <div class="box col2">
  <p class="boxhead ">services:<br></p>
  <p>
  <?php include("Blocks/txt-1-services.html"); ?>
  </p>
  </div>
  
 
<!-- BOX - TWITTER -->
  <div class="box col2">
  <p class="boxhead ">smile twitter feed: <br> </p>
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
  <div class="box col2">
 <p class="boxhead "> web services<br></p>
  <p>
  <strong>Portfolio: website design & development</strong><br>
  
  See more in our <a href="web.php"> website services </a>section<br><br>
  <a href="http://www.thecircusproject.co.uk" target="_blank"><img src="images/TCP.jpg" alt="3d can render" /></a>
   </p> 
  </div>
  
  
<!-- BOX - 3d visualising -->
  <div class="box col4">
  <p class="boxhead ">3D visualising<br></p>
  <p>
  <strong>Packaging visuals</strong><br>
  
  See more in our <a href="artwork.php"> artwork </a>section<br>
  <br>
  Working with artwork files we can generate accurate visuals of how your packaging will look. Useful for research.<br><br>
  <a href="artwork.php"><img src="images/UK-Cokex3-thumb.jpg" alt="Coke 3d can render" /> </a>
   </p> 
  </div>  
  
  
  
  <!-- BOX - Contact us -->
  <div class="box col2 blackbox">
  <p class="boxhead ">contact us<br></p>
  <p>
  01273 778320<br>
  <a href= "mailto:hello@gbartwork.com?subject= website enquiry" >hello@gbartwork.com</a> <br>
  <a href="contact.php">more . . </a>
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
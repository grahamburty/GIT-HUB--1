<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<!-- Google Fonts - link to Muli Condensed font -->
<link href='http://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>

<meta charset="utf-8"> 
<meta http-equiv=Content-Type content="text/html;">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<title>Blog</title>

<link rel="stylesheet" href="css/style.css" media="all">
<link rel="stylesheet" href="css/form.css" media="all">
<link rel="stylesheet" href="css/blog.css" media="all">


<style type="text/css"></style>

<!-- Lightbox - required -->
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/lightbox.js"></script>

<!-- Masonry - required -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="js/jquery.masonry.min.js"></script>



</head>



<body class="blog">

<!-- Nav area -->

  <?php include("top-nav.php"); ?>

<!-- END - Nav area -->


<!-- Main Body area -->

<div id="container" class="centred">


  <!-- BOX - BLOG MAIN -->  
   <div class="box col6">
  <p class="boxhead ">gb | blog<br></p> 
   <p>
   
   <?php include("CMS/includes/blog.php"); ?>

   </p>

   </div>
   
   
   <!-- BOX - BLOG SIDEBAR -->  
   <div class="box col2">
  <p class="boxhead ">gb | quick links<br></p> 
   <p>
   
	<?php include("CMS/includes/recent.php"); ?>
   </p>

   </div>
   
 
<!-- BOX - TWITTER -->
  <div class="box col2twit">
  <p class="boxhead ">twitter feed: <br> </p>
  <p>Latest posts</p>

		<a class="twitter-timeline" href="https://twitter.com/gbartwork"  data-widget-id="329610098425073665">Tweets by @gbartwork</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		
	</div>
  

  
  
  
</div><!-- END - Main Body area -->




<div>

<?php include_once("gbfooter.php"); ?>

</div>


<!-- Vanilla Masonry script -->
<script>

var $container = $('#container');

$(window).load(function(){
  $('#container').masonry({
    itemSelector : '.box',
    columnWidth : 10,
  });
});


</script>




</body>



</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<!-- Google Fonts - link to Muli font -->
<link href='http://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>

<meta charset="utf-8"> 
<meta http-equiv=Content-Type content="text/html;">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<title>gbartwork - digital artwork services</title>

<link rel="stylesheet" href="css/style.css" media="all">

<style type="text/css"></style>

<!-- Lightbox - required -->
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/lightbox.js"></script>

<!-- Masonry - required -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="js/jquery.masonry.min.js"></script>



</head>



<body class="artwork">

<!-- Nav area -->

  <?php include("top-nav.php"); ?>

<!-- END - Nav area -->


<!-- Main Body (grey) area -->

<div id="container" class="centred">


  
 <!-- BOX - Services-1 -->
   <div class="box col2">
  <p class="boxhead">services:<br></p>
  <p>
  <?php include("Blocks/txt-1-services.html"); ?>
  </p>
  </div>
  
 
 <!-- BOX - Services-2 -->
   <div class="box col3">
  <p class="boxhead">digital artwork:<br></p>
  <p>
  <?php include("Blocks/txt-2-services.html"); ?>
  </p>
  </div>
  
  
  <!-- BOX - 3d visualising - Coke -->
  <div class="box col4">
  <p class="boxhead">3D visualising<br></p>
  <p>
  Packaging visuals<br>
  <br>
  Working with artwork files we can generate accurate visuals of how your packaging will look. Useful for research.<br><br>
  <a href="images/UKCokex3-72.jpg"  rel="lightbox"  title="3d visual using Cinema4D"><img src="images/UK-Cokex3-thumb.jpg" alt="Coke 3d can render" /> </a>
   </p> 
   <p class="smallbody">
   Please note: this example was created as a visual to promote our 3D rendering and not as part of a project working with Coca Cola.
   </p>
  </div>  
  
  
  
  <!-- BOX - Artwork example - Spotlites -->
  <div class="box col4">
  <p class="boxhead">digital artwork<br></p>
  <p>
  Packaging artwork<br>
  <br>
  Created in Adobe Illustrator. Using 7 colours, 4 colour process plus two specials and an opaque white. <br>
  <br>
  We used the metallic substrate for the shiny logo and areas covered with transparent ink to create a shiny sparkly "in the spotlite" feel. Mixed with opaque areas to enhance the product image.
  <br>
  <a href="images/aw-ref-spotlites-3.jpg"  rel="lightbox"  title="Packaging artwork using Adobe Illustrator"><img src="images/aw-ref-spotlites-1-thumb.jpg" alt="Spotlites digital artwork" /> </a>
   </p> 
   
  </div>
  
  

  
  
    <!-- BOX - 3d visualising - Batiste-->
  <div class="box col4">
  <p class="boxhead">3D visualising<br></p>
  <p>
  Packaging visuals<br>
  <br>
  We provide 3D visualisng as a service independant of any artwork services - please get in touch for a quote.<br><br>
  <a href="images/batiste-cans.jpg" rel="lightbox"  title="3d visual using Cinema4D"><img src="images/3d-batiste-thumb.jpg" alt="Batiste can render" /> </a>
   </p> 
   <p class="smallbody">
   Please note: this example was created as a visual to promote our 3D rendering and not as part of a project working with Batiste.
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





</body>



</html>
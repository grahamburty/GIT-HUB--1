<!DOCTYPE html>
<html>
<head>
	<title><?php echo $lang_page_title; ?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	
	<link rel="stylesheet" href="css/style.css" media="all" />
	<link rel="stylesheet" href="css/hide.css" media="all" />
	<link rel="stylesheet" href="plugins/plupload/css/plupload.queue.css" media="all" />
	<link rel="stylesheet" href="plugins/redactor/css/redactor.css" />
	
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ios-icon-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ios-sm-precomposed.png" />
	
	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/redactor/redactor.min.js"></script>
	
	<!-- <script src="plugins/redactor/de.js"></script> -->
	
	<!-- Redactor's plugin -->
    <script src="plugins/redactor/fullscreen.js"></script>
	
	<script> function doMenu(item) { obj=document.getElementById(item); col=document.getElementById("x" + item); if (obj.style.display=="none") { obj.style.display="block"; col.innerHTML="<?php echo $lang_embed; ?>"; } else { obj.style.display="none"; col.innerHTML="<?php echo $lang_embed; ?>"; } } 
	</script>
	
	<script>
		$(document).ready(
			function()
			{
				$('#redactor_content').redactor({ 
					lang: 'en',
					imageUpload: 'includes/editor_images.php',
					imageGetJson: 'includes/data_json.php',
					fileUpload: 'includes/editor_files.php',
					convertDivs: false,
					autoresize: true,
					minHeight: 350,
					plugins: ['fullscreen']
				});
			}
		);
	</script>
	
</head>
	
<body>

<script> 
function select_all(obj) 
{ var text_val=eval(obj); 
text_val.select(); } 
</script>
		
<div id="header">

<a href="index.php?p=home">
<div class="logo"></div>
</a>

<a class="logout" href="includes/logout.php"><?php echo $lang_nav_logout; ?></a>

</div>
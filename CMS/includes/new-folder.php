<?php 
$on='blocks'; 
?>

<div id="sub-head">
<a href="index.php?p=blocks"><?php echo $lang_go_back; ?></a>
</div>

<div id="content">
<?php
if(isset($_SESSION["token"]) && isset($_SESSION["token_time"]) && isset($_POST["token"]) && $_SESSION["token"] == $_POST["token"] && !empty($_POST['foldername'])){
	$timestamp_old = time() - (15*60);
		
	if($_SESSION["token_time"] >= $timestamp_old){
		
		
		
$clean_name = $_POST['foldername'];	
$clean_name = str_replace('-', '', $clean_name);
$clean_name = str_replace(' ', '-', $clean_name);
$clean_name = str_replace(',', '', $clean_name);
$clean_name = str_replace('&', '', $clean_name);
$clean_name = str_replace('!', '', $clean_name);
$clean_name = str_replace(')', '', $clean_name);	
$clean_name = str_replace('(', '', $clean_name);
$clean_name = str_replace('.', '', $clean_name);	
$clean_name = str_replace(':', '', $clean_name);
$clean_name = str_replace('#039;', '', $clean_name);
$clean_name = str_replace('/', '', $clean_name);
$clean_name = str_replace('&', '', $clean_name);
$clean_name = str_replace('amp;', '', $clean_name);
$clean_name = str_replace('--', '-', $clean_name);
$clean_name = str_replace('\'', '', $clean_name);
$clean_name = str_replace('<', '', $clean_name);
$clean_name = str_replace('>', '', $clean_name);
$clean_name = str_replace('\\', '', $clean_name);

		
		@$filename = strip_tags($clean_name);
        $foldername = str_replace(' ', '-', $filename);
		
		if(!empty($_GET["d"])) {
			$folders = strtr($_GET["d"], "../","/");
			$folder_total = "data/blocks/" . $folders  ."/". $foldername;
		}else{
			$folder_total = "data/blocks/" . $foldername;
		}
		
		if(@mkdir($folder_total, 0750)){
			$_SESSION["blocks"]["new"] = $block_total;
			echo "<p class=\"green\">" . $foldername . " $lang_blocks_was_created <a href=\"index.php?p=blocks\">$lang_blocks_view_created</a></p>";
		}else{
			echo "<p class=\"errorMsg\">$lang_blocks_fold_exists</p>";
		}
		unset($_SESSION["token"]);	
		unset($_SESSION["token_time"]);
		
			
	}else{
		echo "<p class=\"errorMsg\">$lang_blocks_session_expire</p>";
	}
}

if(empty($_SESSION["token"]) || $_SESSION["token_time"] <= $timestamp_old){
		 $_SESSION["token"] = md5(uniqid(rand(), TRUE));	
		 $_SESSION["token_time"] = time();
}
			
?>	
	
<div class="create-new">
	<h1><?php echo $lang_blocks_newfold; ?></h1>
		
	<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="create-form">
	<input type="text" name="foldername" id="foldername" placeholder="<?php echo $lang_blocks_fold_name; ?>">
	<input type="hidden" name="token" value="<?php echo $_SESSION["token"] ?>">
	<input type="submit" value="<?php echo $lang_blocks_create_button; ?>" class="btn">				
	</form>
</div><br>
<div style="clear: both;"></div> 

</div></div>

<?php $on='images'; ?>

<div id="sub-head">
    <a href="index.php?p=manage-gallery"><?php echo $lang_go_back; ?></a>     
</div>

<div id="content">

<?php

if($_POST['gallery']) {

	function stringClean($label) {
		$search = array ('@[éèêëÊË]@i','@[àâäÂÄ]@i','@[îïÎÏ]@i','@[ûùüÛÜ]@i','@[ôöÔÖ]@i',
	'@[ç]@i','@[^a-zA-Z0-9]@');
	$replace = array ('e','a','i','u','o','c',' ');
	$label =  preg_replace($search, $replace, $label);
	$label = strtolower($label); 
	$label = str_replace(" ",'-',$label); 
	$label = preg_replace('#\-+#','-',$label); 
	$label = preg_replace('#([-]+)#','-',$label);
	trim($label,'-');

	return $label;

	}
    
    $name = stringClean($_POST['gallery']);
   
    
	if(file_exists("data/img/gallery/".$name)) {
		echo "";
		echo "<p class=\"errorMsg created\">$lang_gal_error</p>";
		
	} else {
		
		
		$gal = mkdir("data/img/gallery/". $name , 0755);
		$cac = mkdir("data/img/gallery/$name/". "cache" , 0775);
			
			$text = "<?php ". "include('../../../../plugins/timthumb/tim_thumb.php')".";"." ?>";
			
			$fp = @fopen("data/img/gallery/$name/". "thumb.php","w");
			$ph = @fwrite($fp, $text);
			fclose($fp);

		if($gal && $cac && $fp && $ph ){
			echo  "<p class=\"green\"> $lang_gal_created</p>";
		  }else{ echo "<p class=\"errorMsg created\">$lang_gal_error</p>";}
	}		
	
}

?>

<div class="create-new">

<h1><?php echo $lang_gal_newgal; ?></h1>
	
<form action="index.php?p=new-gallery" method="post" class="create-form">
	<input type="text" name="gallery" maxlength="20" placeholder="<?php echo $lang_gal_newname; ?>" /> 
	<input type="submit" value="<?php echo $lang_gal_create_gal; ?>" class="btn"/>
	</form>
</div>

</div>
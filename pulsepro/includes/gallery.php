<?php 
error_reporting(0);
include('config.php'); 
include_once("path.php"); 
?>

<link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/<?php echo $pulse_dir?>/plugins/flex/flexslider.css" />
<script src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/<?php echo $pulse_dir?>/plugins/jquery/jquery.min.js"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/<?php echo $pulse_dir?>/plugins/flex/jquery.flexslider.js"></script>

<script>
	$(window).load(function() {
	$('.flexslider').flexslider({
	slideshowSpeed: 6000,
	slideshow: true,
	keyboardNav: true,
	directionNav: true,
	controlNav: false,
	animationDuration: 600, 
	pauseOnAction: true
	});
	});
</script>
	
<div class="flex-container">
<div class="flexslider">
<ul class="slides">

<?php 
if(!empty($_GET["g"])) {
	$gallery = strip_tags(trim(stripslashes(htmlspecialchars($_GET["g"], ENT_QUOTES, 'UTF-8'))));
	$gallery = str_replace("/","", $gallery);
	$gallery = str_replace("\\","", $gallery);	
}

$opFile = ROOTPATH . "/data/img/gallery/". $gallery ."/gallery.txt";

if(file_exists($opFile)) {

	$fp = fopen($opFile,"r");
    $data = @fread($fp, filesize($opFile));
    fclose($fp);

    $line = explode("\n", $data);
    $no_of_posts = count($line)-1;
                   
 foreach($line as $test){
              	
       		 $test_line[] = explode("|", $test);
    	        
        }
                	
  $xyn = false;  
              	
 foreach ($test_line as $k=> $v){
	
		if (trim($v['4']) == ''){ 
			
			$v['4'] = 99 ; 
			
			}

		$b[$k] = $v['4'];
	
		if($b[$k]!= 99){ 
		
			$xyn = true; 
			
			}
				
  }
		
 if ($xyn == true) { 
	
	    asort($b); 
	
		foreach($b as $key=>$val){
								
			$image[] = $test_line[$key];
					
			}
			
	 } else { 
   		
   			$image = array_reverse($test_line);
   			
   			}    
 
 for ($i=0; $i<$no_of_posts+1; $i++) {
 
	    if($image[$i][1] == $gallery) { 
	        
            echo "<li>\n";
            
            echo '<img  src="http://'. $_SERVER['HTTP_HOST'] .'/'. $pulse_dir .'/data/img/gallery/'. $gallery .'/'. $image[$i][2] .'" alt="'. $image[$i][3] .'" />' . "\n";
            
            if(!empty($image[$i][3])){
            
           	 	echo '<p class="flex-caption">'. $image[$i][3] .'</p>' . "\n";
           	 	
            }
            
            echo "</li>\n\n";
	    }
    }
} 

?>
</ul>
</div>
</div>
<script type="text/javascript" src="highslide/highslide.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
<script type="text/javascript">
	hs.graphicsDir = 'highslide/graphics/';
	hs.wrapperClassName = 'wide-border';
</script>



<a href='$patha/$file' class='highslide' onclick='return hs.expand(this)'>
	<img src='$path/$file" alt="Highslide JS'
		title='Click to enlarge' height='120' width='107' /></a>
		
		
<?php
// images dir

$path = "img/"; 
//images them dir
$patha ="img2/";   
$dh = opendir($path);
while ($file = readdir($dh))
if($file != "." && $file != ".." && $file != "Thumbs.db" && $file != "index.html" && $file != "index.php"      ) {
{
	
	
	echo "<a href='$patha/$file' class='highslide' onclick='return hs.expand(this)'>
	<img src='$path/$file' alt='Highslide JS'
		title='Click to enlarge' height='120' width='107' /></a>";
}
}
closedir($dh); // close dir
?>
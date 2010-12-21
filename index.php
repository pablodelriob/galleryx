<!-- <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:100' rel='stylesheet' type='text/css'>-->
<?php 
	if(!empty($_COOKIE['_theme'])) $style = $_COOKIE['_theme'];
	else $style = "none";
?>
<link id="hoja_estilo" rel="stylesheet" href="<?php echo $style ?>.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.functions.js"></script>

<style type="text/css">
<!--
ul {
	float: left;
	width: auto;
	list-style: none;
	margin: 5px;
	padding: 5px;
}

li {
	float: left;
	width: auto;
	
	}
	
	
	
-->
</style> 
<title>GALLERY - Effects</title>
<link href="base.css" rel="stylesheet" type="text/css" />
<h1>Galeria v1.jq</h1>
<img src="galleryx.gif" width="403" height="77" />
  <div id="estilos">
    
    <span class="gal1"> <a id="style1" href="theme.php?thm=style1">Estilo 1</a> </span>
	<span class="gal5">	<a id="style5" href="theme.php?thm=style5">Estilo 5</a> </span>
    <span class="gal4"> <a id="style4" href="theme.php?thm=style4">Estilo 4</a> </span>
    <span class="gal3"> <a id="style3" href="theme.php?thm=style3">Estilo 3</a> </span> 
    <span class="gal2"> <a id="style" href="theme.php?thm=style">Estilo 2</a>  </span>
	<span class="gal2"> <a id="style6" href="theme.php?thm=style6">Estilo 6</a>  </span>
  </div>
<ul>
  <?php 

$dir = "img/"; 

if($handle = opendir($dir)) 
{ 
	while($file = readdir($handle)) 
	{ 
		clearstatcache(); 
		if(is_file($dir.'/'.$file)) 
			echo "<li><img src='img/$file' 	width='150' height='150'></li>"; 
	} 
	closedir($handle); 
} 

?>
</ul><div id="estilos">
    
    <span class="gal1"> <a id="style1" href="theme.php?thm=style1">Estilo 1</a> </span>
	<span class="gal5">	<a id="style5" href="theme.php?thm=style5">Estilo 5</a> </span>
    <span class="gal4"> <a id="style4" href="theme.php?thm=style4">Estilo 4</a> </span>
    <span class="gal3"> <a id="style3" href="theme.php?thm=style3">Estilo 3</a> </span> 
    <span class="gal2"> <a id="style" href="theme.php?thm=style">Estilo 2</a>  </span>
  </div>
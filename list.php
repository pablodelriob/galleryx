<!-- <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:100' rel='stylesheet' type='text/css'>-->


<style type="text/css">
<!--
h1 { font-family: 'Josefin Slab', arial, serif; 
margin: 5px;
	padding: 6px;}
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
	margin: 5px;
	padding: 6px;
	/*
	border: 1px solid #E3E3E3;
	outline: 1px solid #ddd;
	border-top: 1px solid #fff;
	padding: 10px;
	background: #f0f0f0;
*/
	/*
	color: #fff;
	padding: 10px;
	background: #111;
	border: 1px solid #000;
	border-right: 1px solid #353535;
	border-bottom: 1px solid #353535;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	*/
	
	/*
padding: 20px;
	border: 1px solid #f0f0f0;
	border-bottom: 2px solid #ccc;
	
	
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	
	*/
/* Inner Shadow
-moz-box-shadow:inset 0 0 10px #000000;
-webkit-box-shadow:inset 0 0 10px #000000;
box-shadow:inset 0 0 10px #000000;

*/
	
	-webkit-box-shadow: 0 0 30px rgb(0,0,0);
	-moz-box-shadow: 0 0 30px rgb(0,0,0);
	box-shadow: 0 0 30px rgb(0,0,0);
		-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;


}

-->
</style><title>GALLERY - Effects</title>
<h1>Galeria v1.jq</h1>
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
</ul>

<!-- 
<script type="text/javascript" src="lib/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery.backstretch.min.js"></script>

<script type="text/javascript">
    $.backstretch("121.jpg");
</script> -->
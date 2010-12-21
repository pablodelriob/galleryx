
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
	
	color: #fff;
	padding: 10px;
	background: #fff;
	border: 1px solid #000;
	border-right: 1px solid #353535;
	border-bottom: 1px solid #353535;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	
	
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
	
	/* 
	Shadow 
	-webkit-box-shadow: 0 0 30px rgb(0,0,0);
	-moz-box-shadow: 0 0 30px rgb(0,0,0);
	box-shadow: 0 0 30px rgb(0,0,0);
	*/
}
-->
</style>
<script type="text/javascript">

/******************************************
* Scrollable content script II- © Dynamic Drive (www.dynamicdrive.com)
* Visit http://www.dynamicdrive.com/ for full source code
* This notice must stay intact for use
******************************************/

iens6=document.all||document.getElementById
ns4=document.layers

//specify speed of scroll (greater=faster)
var speed=5

if (iens6){
document.write('<div id="container" style="position:relative;width:800px;height:400px;border:1px solid black;overflow:hidden">')
document.write('<div id="content" style="position:absolute;width:800px;left:0;top:0">')
}
</script>

<ilayer name="nscontainer" width=175 height=160 clip="0,0,175,160">
<layer name="nscontent" width=175 height=160 visibility=hidden>

<!--INSERT CONTENT HERE-->
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
<!--END CONTENT-->

</layer>
</ilayer>

<script language="JavaScript1.2">
if (iens6)
document.write('</div></div>')
</script>

<table width="175px"><td><p align="right">
<a href="#" onMouseover="moveup()" onMouseout="clearTimeout(moveupvar)"><img src="up.gif" border=0></a>  <a href="#" onMouseover="movedown()" onMouseout="clearTimeout(movedownvar)"><img src="down.gif" border=0></a></p></td>
</table>

<script language="JavaScript1.2">
if (iens6){
var crossobj=document.getElementById? document.getElementById("content") : document.all.content
var contentheight=crossobj.offsetHeight
}
else if (ns4){
var crossobj=document.nscontainer.document.nscontent
var contentheight=crossobj.clip.height
}

function movedown(){
if (iens6&&parseInt(crossobj.style.top)>=(contentheight*(-1)+100))
crossobj.style.top=parseInt(crossobj.style.top)-speed+"px"
else if (ns4&&crossobj.top>=(contentheight*(-1)+100))
crossobj.top-=speed
movedownvar=setTimeout("movedown()",20)
}

function moveup(){
if (iens6&&parseInt(crossobj.style.top)<=0)
crossobj.style.top=parseInt(crossobj.style.top)+speed+"px"
else if (ns4&&crossobj.top<=0)
crossobj.top+=speed
moveupvar=setTimeout("moveup()",20)

}

function getcontent_height(){
if (iens6)
contentheight=crossobj.offsetHeight
else if (ns4)
document.nscontainer.document.nscontent.visibility="show"
}
window.onload=getcontent_height
</script>
<!DOCTYPE html>

<head>
	<meta name="Online Katalog" content="Online Katalog">
	<link rel="stylesheet" href="../script/styles.css">
	<link rel="Javascript" href="./javascript.js">
 </head>
<html>
	<body>
	<div class="wrapper">
		<nav>
			<ul>
				<li><p class="logo">Silvias Vintage shop</p></li>
				<li><a href="?p=home">HOME</a></li>
				<li><a href="?p=article&d=all">Artikel</a></li>
				<li><a href="#">About US</a></li>
				<li id="login"><a href="?p=register" >LogIn</a></li>
			</ul>	
		</nav>
<div>
<?php 
	if(isset($_GET['p'])|| isset($_GET['d'] )){
		$p = $_GET['p'];
		switch($p){
		case 'home' :{
			require_once("home.php");
			break;
			}
		
		case 'article' :{
			require_once("article.php");
			break;
		}
		
		case 'register' :{
			require_once("register.php");
			break;
		}
		
		default: {}
	}
	}
	else{ 
			require_once("home.php");
			break;
		}
?>
</div>

		
		<footer>
			<h4>Silvia Sager</h4>
			<p>Erlach unter den Halden 12</p>
			<p><b>ACHTUNG!</b> Alle Artikel die auf dieser Seite ausgestellt sind <b>unter Vorbehalt!</b></p>
		</footer>
		</div>
	</body>
</html>
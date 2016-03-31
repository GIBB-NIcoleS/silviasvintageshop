<!DOCTYPE html>

<head>
	<meta name="Online Katalog" content="Online Katalog">
	<link rel="stylesheet" href="../script/styles.css">
	<link rel="Javascript" href="./javascript.js">
 </head>
<html>
	<body>
		<nav>
			<ul>
				<li><p class="logo">Silvias Vintage shop</p></li>
				<li><a href="?p=home">HOME</a></li>
				<li><a href="?p=article&d=all">Artikel</a></li>
				<li><a href="#">About US</a></li>
				<li id="login"><a href="#" >LogIn</a></li>
			</ul>	
		</nav>
		
<?php 
	if(isset($_GET['p'])|| isset($_GET['d'] )){
		$p = $_GET['p'];
		switch($p){
		case 'home' :{
			require_once("home.php");
		}
		
		case 'article' :{
			require_once("article.php");
		}
		
		default: {}
	}
	}
	else{ 
			require_once("home.php");
		}
?>

		
		<footer>
			<h4>Silvia Sager</h4>
			<p>Erlach unter den Halden 12</p>
		</footer>
	</body>
</html>
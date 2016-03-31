<!DOCTYPE html>

<head>
	<meta name="Online Katalog" content="Online Katalog">
	<link rel="stylesheet" href="../script/styles.css">
    <link href="../script/css/bootstrap.min.css" rel="stylesheet">
	<link rel="Javascript" href="./javascript.js">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<html>
	<body>
		<nav >
			<ul>
			<li><p class="logo">Silvias Vintage shop</p></li>
			<li><a href="?p=home" id="active">HOME</a></li>
			<li><a href="?p=article">Artikel</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">About US</a></li>
			<li><a href="#">LogIn</a></li>
			</ul>
		</nav>
<?php 
	if(isset($_GET['p'] )){
		$p = $_GET['p'];
		switch($p){
		case 'home' :{
			require_once("home.php");
		}
		
		case 'article' :{
			require_once("article.php");
		}
		
		default: {
			require_once("home.php");
		}
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
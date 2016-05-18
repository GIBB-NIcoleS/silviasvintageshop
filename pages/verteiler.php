<?php
	session_start();
	require("db_connect.php");
	require_once("login.class.php");
	require_once("personalien.class.php");
	require_once("kontakt.class.php");
	require_once("wertgegenstand.class.php");
	require_once("bewertung.class.php");
	switch($_GET["aktion"]){
		case 1:			
			$name = $mysqli->real_escape_string($_POST['username']);
			$passwd = $mysqli->real_escape_string($_POST['passwd']);
			
			$passwd = sha1($passwd);
			$l = new user($mysqli);
			if($l->login($name,$passwd)){
				echo 1;
			}
			else{
				echo 0;
			}
			
			break;
		/*case 2:			
			$name = $mysqli->real_escape_string($_POST['username']);
			$pass1 = $mysqli->real_escape_string($_POST['pass1']);
			$pass2 = $mysqli->real_escape_string($_POST['pass2']);
			$mail = $mysqli->real_escape_string($_POST['mail']);
			
			$pname=  false;
			$ppass1 = false;
			$ppass2 = false;
			$pmail = false;
			
			
			
			$r = new user($mysqli);
			if(ctype_alnum($name)){
				if($r->len($name,3,10)){
					echo 1;
					$pname = true;
				}
				else{
					echo 0;
				}
			}
			
			if($r->len($pass1,6,12)){
				$ppass1 = true;
				echo 1;
			}
			else{
				echo 0;
			}
			
			if($r->str_equal($pass1,$pass2)){
				$ppass2 = true;
				echo 1;
			}
			else{
				echo 0;
			}
			
			if($r->word_match('@',$mail) && $r->word_match('.',$mail)){
				$pmail = true;
				echo 1;
			} 
			else{
				echo 0;
			}
			
			if($pname == true && $ppass1 == true && $ppass2 = true && $mail == true){
				if($r->register($name,sha1($pass1),$mail)){
					$r->login($name,sha1($pass1));
					echo 1;
				}else{
					echo 0;
				}
			}
			break;*/
		case 3:		
			$vorname = $mysqli->real_escape_string($_POST['vorname']);
			$nachname = $mysqli->real_escape_string($_POST['nachname']);
			$adresse = $mysqli->real_escape_string($_POST['adresse']);
			$hausnummer = $mysqli->real_escape_string($_POST['hausnummer']);
			$ort = $mysqli->real_escape_string($_POST['ort']);
			$postleitzahl = $mysqli->real_escape_string($_POST['postleitzahl']);
			
			$personalien = new personalien($mysqli);
			if(!empty($vorname) && !empty($nachname) && !empty($adresse) && !empty($hausnummer) && !empty($ort) && !empty($postleitzahl)){
				if($personalien->db_write(htmlspecialchars($vorname),$nachname,$adresse,$hausnummer,$postleitzahl,$ort,$_SESSION['username'])){
					echo "Die Personalien wurden erfolgreich erfasst";
				}
				else{
					echo "Sie haben Ihre Personalien schon eingegeben";
				}
			}
			else{
				echo "Die Personalien konnten nicht erfasst werden";
			}
			break;
		case 4:
			$thing = $mysqli->real_escape_string($_POST['what']);
			$new = $mysqli->real_escape_string($_POST['new']);
			
			switch($thing){
				case 'vorname':
					$thing = 'vorname';
					break;
				case 'nachname':
					$thing = 'name';
					break;
				case 'strasse':
					$thing = 'strasse';
					break;
				case 'nr':
					$thing = 'nr';
					break;
				case 'plz':
					$thing = 'plz';
					break;
				case 'ort':
					$thing = 'ort';
					break;
			}
			
			$u = new personalien($mysqli);
			if($u->edit_db($thing,$new,$_SESSION['username'])){
				echo "Die Daten wurder erfolgreich geändert";
			}
			else{
				echo "Änderung der Daten Fehlgeschlagen";
			}
			break;
		case 5:			
			$l = new user($mysqli);
			$l->logout();
			break;
		case 6:
			$name =  $mysqli->real_escape_string($_POST['name']);
			$mail = $mysqli->real_escape_string($_POST['mail']);
			$phone = $mysqli->real_escape_string(@$_POST['nummer']);
			$betreff = $mysqli->real_escape_string($_POST['betreff']);
			$inhalt = $mysqli->real_escape_string($_POST['content']);
			$w = new kontakt($mysqli);
			if(!empty($phone) && ctype_digit($phone)){
				$w->write_contact_phone($name,$mail,$phone,$betreff,$inhalt);
			}
			else{
				echo 1;
				$w->write_contact_no($name,$mail,$betreff,$inhalt);
			}
			break;
		case 7:			
			$id = $_POST['id'];			
			$e = new kontakt($mysqli);
			$e->mv_contact($id);
			break;
		case 8:
			$id=$_POST['id'];
			$d = new kontakt($mysqli);
			$d->rm_contact($id);
			break;
		case 9:
			$id = $_POST['id'];
			$p = new kontakt($mysqli);
			$p->pr_contact($id);
			break;
		case 10:
			$name = $mysqli->real_escape_string($_POST['name']);
			$preis = $mysqli->real_escape_string($_POST['price']);
			$versicherung = $mysqli->real_escape_string($_POST['versicherung']);
			$ansprechperson = $mysqli->real_escape_string($_POST['ansprechperson']);
			$beschreibung = $mysqli->real_escape_string($_POST['description']);
			$kategorie = $mysqli->real_escape_string($_GET['kat']);
			$gegenstand = $_FILES['gegenstand'];
			$quittung = $_FILES['quittung'];
			if(empty($quittung['tmp_name'])){
				$quittung = array();
				$quittung[2] = "";
			}
			else{
				$quittung = file($quittung['tmp_name']);
			}
			if(empty($gegenstand['tmp_name'])){
				$gegenstand = array();
				$bild = "";
			}
			else{
				$handle = fopen($gegenstand['tmp_name'],"r");
				$bild = fread($handle,filesize($gegenstand['tmp_name']));
				fclose($handle);
				print_r($gegenstand);
				$bild = addslashes($bild);
			}
			$w = new wertgegenstand($mysqli);
			$w->db_write($name,$preis,$versicherung,$ansprechperson,$beschreibung,$bild,$mysqli->real_escape_string($quittung),$kategorie);
			header("Location: wertgegenstaende.php");
			break;
		case 11:
			$kat1 = $mysqli->real_escape_string($_POST['kat1']);
			$kat2 = $mysqli->real_escape_string($_POST['kat2']);
			$kat3 = $mysqli->real_escape_string($_POST['kat3']);
			$kat4 = $mysqli->real_escape_string($_POST['kat4']);
			if(isset($_POST['kommentar'])){
				$kommentar = $mysqli->real_escape_string($_POST['kommentar']);
			}
			else{
				$kommentar = '';
				echo 1;
			}
			if(ctype_digit($kat1) && ctype_digit($kat2) && ctype_digit($kat3) && ctype_digit($kat4)){
				if(0 <= $kat1 && $kat1 <= 5 && 0 <= $kat2 && $kat2 <= 5 && 0 <= $kat3 && $kat3 <= 5 && 0 <= $kat4 && $kat4 <= 5){
					$b = new bewertung($mysqli);
					$b->write_db($kat1,$kat2,$kat3,$kat3,$_SESSION['username'],$kommentar);
				}
			}
			break;
	}
?>
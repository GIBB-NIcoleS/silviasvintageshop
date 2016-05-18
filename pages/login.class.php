<?php
		class login{
			function __construct($mysqli){
				$this->db = $mysqli;
			}
			//Login überprüfung
			function login($name,$passwd){
				$log = $this->db->query("SELECT * FROM benutzer WHERE BenutzerName='$name' AND Passwd='$passwd'")or die($this->db->error);
				
				while($login = $log->fetch_object()){
					if($login->name == $name && $login->passwd == $passwd){
						$_SESSION['username'] = $name;
						$_SESSION['bewertet'] = $login->bewertet;
						$_SESSION['kommentiert'] = $login->kommentiert;
						return true;
					}
					else{
						return false;
					}
				}
			}
			// auf länge überprüfen
			function len($word,$minLen,$maxLen){
				if(strlen($word) >= $minLen && strlen($word) <= $maxLen){
					return true;
				}				
				else{
					return false;
				}
			}
			// Überprüfen ob ein Wort vorkommt
			function word_match($word,$string){
				if(strpos($word,$string) >= 0){
					return true;
				}
				else{
					return false;
				}
			}
			// Auf gleichheit überprüfen
			function str_equal($word1,$word2){
				if($word1 == $word2){
					return true;
				}
				else{
					return false;
				}
			}
			// Person hinzufügen
			function register($name,$pass,$vorn,$nachn,$mail){
				$vorhanden = $this->db->query("SELECT * FROM benutzer as b, person as p WHERE b.BenutzerName='$name' OR p.EMail='$mail'")or die($this->db->error);
				if($vorhanden->num_rows >=1){
					return false;
					die;
				}
				else{
					$this->db->query("INSERT INTO benutzer(Benutzername,Passwd) VALUES ('$name','$pass')")or die($this->db->error);
					$this->db->query("INSERT INTO person(Benutzername,Vorname,Nachname, EMail) VALUES ('$name','$vorn','$nachn','mail')")or die($this->db->error);
					return true;
				}
			}
			//Logout
			function logout(){
				session_start();
				session_destroy();
				header("Location: index.php");
				return true;
			}
			/*
			function ask_admin($name){
				$admins = $this->db->query("SELECT * FROM admins WHERE uid = (SELECT uid FROM user WHERE name = '$name')")or die($this->db->error);
				if($admins->num_rows == 1){
					return true;
				}
				else{
					return false;
				}
			}*/
		}
	?>
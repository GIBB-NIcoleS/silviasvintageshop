<?php
	class wertgegenstand{
		function __construct($mysqli){
			$this->db = $mysqli;
		}
		
		function db_write($name,$preis,$versicherung,$ansprechperson,$beschreibung,$gegenstand,$quittung,$WkatId){
			$this->db->query("INSERT INTO wertgegenstand (uid,wertgegenstand,preis,versicherung,ansprechperson,beschreibung,bild,quittung,WkatId) VALUES ((SELECT uid FROM user WHERE name = '".$_SESSION['username']."'),'$name',$preis,'$versicherung','$ansprechperson','$beschreibung','$gegenstand','$quittung',$WkatId)")or die($this->db->error);
			return true;
		}
		
		function db_read($username){
			$gegenstaende = $this->db->query("SELECT * FROM wertgegenstand WHERE uid = (SELECT uid FROM user WHERE name = '$username')")or die($this->db->error);
			$i = 0;
			if($gegenstaende->num_rows > 0){
				while($gegenstand = $gegenstaende->fetch_object()){
					$this->gid[$i] = $gegenstand->gid;
					$this->uid[$i] = $gegenstand->uid;
					$this->WkatId[$i] = $gegenstand->WkatId;
					$this->wertgegenstand[$i] = $gegenstand->wertgegenstand;
					$this->preis[$i] = $gegenstand->preis;
					$this->versicherung[$i] = $gegenstand->versicherung;
					$this->ansprechperson[$i] = $gegenstand->ansprechperson;
					$this->beschreibung[$i] = $gegenstand->beschreibung;
					$this->bild[$i] = $gegenstand->bild;
					$this->quittung[$i] = $gegenstand->quittung;
					$i++;
				}
			}
			else{
				return false;
			}
		}
	}
?>
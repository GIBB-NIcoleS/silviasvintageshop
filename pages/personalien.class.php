	<?php
		class personalien{
			function __construct($mysqli){
				$this->db = $mysqli;
			}
			
			function is_string($probe){
				if(ctype_alpha($probe)){
					return true;
				}
				else{
					return false;
				}
			}
			
			function is_number($probe){
				if(ctype_digit($probe)){
					return true;
				}
				else{
					return false;
				}
			}
			
			function db_write($vorname,$nachname,$adresse,$hausnummer,$postleitzahl,$ort,$username){
				$probe = $this->db->query("SELECT * FROM profiles WHERE uid = (SELECT uid FROM user WHERE name = '$username')")or die($this->db->error);
				if($probe->num_rows == 0){
					$this->db->query("INSERT INTO profiles (uid,name,vorname,strasse,nr,ort,plz) VALUES ((SELECT uid FROM user WHERE name = '$username'),'$nachname','$vorname','$adresse',$hausnummer,'$ort',$postleitzahl)")or die($this->db->error);
					return true;
				}
				else{
					$this->db->query("UPDATE profiles set name='$nachname',vorname='$vorname',strasse='$adresse',nr=$hausnummer,ort='$ort',plz=$postleitzahl WHERE uid=(SELECT uid FROM user WHERE name='$username');")or die($this->db->error);
					return true;
				}
			}
			
			function read_db($username){
				$personalie = $this->db->query("SELECT * from profiles WHERE uid = (SELECT uid FROM user WHERE name = '$username')")or die($this->db->error);
				if($personalie->num_rows == 1){
					$personalien = $personalie->fetch_object();
					
					$this->name = $personalien->name;
					$this->vorname = $personalien->vorname;
					$this->strasse = $personalien->strasse;
					$this->nr = $personalien->nr;
					$this->ort = $personalien->ort;
					$this->plz = $personalien->plz;
					$this->button = 'Personalien &auml;dern';
					return true;
				}
				else{
					$this->name = '';
					$this->vorname = '';
					$this->strasse = '';
					$this->nr = '';
					$this->ort = '';
					$this->plz = '';
					$this->button = 'Personalien eintragen';
					return false;
				}
			}
		}
	?>
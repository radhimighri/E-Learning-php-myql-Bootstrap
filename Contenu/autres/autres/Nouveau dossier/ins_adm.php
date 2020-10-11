          
			<?php

	session_start();
	include ("function.php");
			connectMaBase();

		
					
				$cin = $_POST['username'];
				$nom = $_POST['firstName'];
				$prenom = $_POST['lastName'];
				$sexe = $_POST['gender'];
				$date_n = $_POST['birthday'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$dep = $_POST['dep'];	
				$tel = $_POST['tel'];
				$sql = 'INSERT INTO utilisateurs VALUES("","' . $cin . '","' . $nom . '","' . $prenom . '","' . $sexe . '","' . $date_n . '","' . $email . '","' . $password . '","' . $tel . '","ens", "' . $dep . '","" ,"0")';
								header('Location: ./inscrip_success.php');
				mysql_query($sql) or die('Erreur SQL !' . $sql . '<br />' . mysql_error());
				mysql_close();
	
		?>
             
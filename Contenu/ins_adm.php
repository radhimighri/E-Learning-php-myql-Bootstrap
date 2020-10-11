          
			<?php

	session_start();
	include ("function.php");
include("config.php");

		
					
				$cin = $_POST['username'];
				$nom = $_POST['firstName'];
				$prenom = $_POST['lastName'];
				$sexe = $_POST['sexe'];
				$date_n = $_POST['birthday'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$tel = $_POST['tel'];
				
				$Resultatidannance = 'SELECT * FROM utilisateurs where id_utilisateurs= (SELECT max(id_utilisateurs) FROM utilisateurs ) ';
			$reqResultatidannance = mysqli_query($base,$Resultatidannance) or die('Erreur SQL !<br />'.$Resultatidannance.'<br />'.mysqli_error($base)); 
			$data2 = mysqli_fetch_array($reqResultatidannance) ;
			$id=$data2['id_utilisateurs']+1;
				
				/*$sql = 'INSERT INTO utilisateurs VALUES("'.$id.'","' . $cin . '","' . $nom . '","' . $prenom . '","' . $sexe . '","' . $date_n . '","' . $email . '","' . $password . '","' . $tel . '","admin",9,17,"1")';*/

				$sql = 'INSERT INTO utilisateurs VALUES("'.$id.'","' . $cin . '","' . $nom . '","' . $prenom . '","' . $sexe . '","' . $date_n . '","' . $email . '","' . $password . '","' . $tel . '","admin","","","1")';

								header('Location: inscrip_success_admin.php');
								/*else {
										header('Location: inscrip_failed_admin.php');
				}*/
				mysqli_query($base,$sql) or die('Erreur SQL !' . $sql . '<br />' . mysqli_error($base));
				mysqli_close($base);
	
		?>
             
<!DOCTYPE html>
<html lang="fr">
	<head>
<?php
	session_start();
?>
<?php
include ("function.php");
include("config.php");

?>


		<?php
		include ("incssjsmore.php");
		?>

		<title>ISMAI Kairouan</title>

		<?php
		include ("incssjs.php");
		?>
				<link rel="shortcut icon"  href="icon/favicon.ico" >

	</head>

	<body role="document" style="margin-bottom: 90px;">
	

<?php
include ("menu.php");
?>
		

		<div class="container theme-showcase" role="main">

			<?php
			include ("baniere.php");
			?>
			
			<?php
			include ("left.php");
			?>

			<div class="jumbotron" style="width: 73%; float: right;">
				
				 <?php
				include("config.php");
					$sqlaff = 'select * from  resultat  where resultat.utilisateur_id_utilisateur="'.$_SESSION['id_utilisateurs'].'" ';
					$req = mysqli_query($base,$sqlaff) or die(mysqli_error());
					$data =mysqli_fetch_array($req);
					?>
            <div class="row" align="center">       
<table width="452">
<tr>
<td width="226">
				<div class="alert alert-info" style="width:100%" >
          Résultat : <?php echo $data['resultat']; ?></div></td>
<td width="214">				<div class="alert alert-info" style="width:100%" >Moy : <?php echo $data['moy']; ?></div>
</td>
</tr>
</table>
				  <br/>
                   <div id="ImprimDiv">
                   <img src="<?php echo $data['relever']; ?>" />
                  </div>
				 
                 
                   <center><button type="submit" name="valider" onClick="javascript:CallPrint('ImprimDiv');" class="medium success button" style="margin-top: 15%;">Imprimer<img src="images/printButton.png"></button></center>
      <div align="center"><a href="<?php echo $data['relever']; ?>" style="float:right;"  class="btn btn-sm btn-success">
                     <span class="glyphicon glyphicon-download-alt"></span>
                     Telecharger 
                     </a>
              </div>
              </div>
                    
                </div></div>
		<?php
		include ("foot.php");
		?>

		<?php
		include ("fast.php");
		?>

	</body>
<script language="javascript">
		function CallPrint(strid) {
			var prtContent = document.getElementById(strid);
			var WinPrint = window.open("");
			WinPrint.document.write(prtContent.innerHTML);
			WinPrint.document.close();
			WinPrint.focus();
			WinPrint.print();
			WinPrint.close();
			prtContent.innerHTML = strOldOne;
		}
            </script>
</html>
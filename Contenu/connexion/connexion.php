<!DOCTYPE html>
<html lang="fr">
<head>
<?php
include("../function.php");
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ISMAI Kairouan</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>
<link rel="shortcut icon"  href="../icon/favicon.ico">

</head>
<body style="background-color: SteelBlue !important;">

<div id="wrapper">

	
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
  

<form name="login-form" class="login-form" action="connexion.php" method="post">

    <div class="header">
    	
    <h1 align="center">Authentif_ISMAIK</h1>
    <center><span><font size="4">Accès Internaut</font></span></center>
    </div>
  
    <div class="content">
	<input name="username" type="text" class="input username" value="Login (Tapez votre CIN)" onFocus="this.value=''" />
 <input name="password" type="password" class="input password" value="Password" onFocus="this.value=''" />
    </div>
 
    <div class="footer">
        <a href="../index.php"><img src="../images/retour.png" width="106" height="47" border="0"></a>
        <input type="submit" name="submit" value="Valider" class="button" />
      
    </div>
  

</form>


</div>

</body>
<?php 
   include("config.php");

     if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
  if ((isset($_POST['username'])) && (isset($_POST['password']))) {
   
  
	$query_Recordset1 = "SELECT * FROM utilisateurs";
	$Recordset1 = mysqli_query($base,$query_Recordset1) or die(mysqli_error());
	$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
	$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
  
    $f_nom_utilisateur_Recordset2 = "-1"; 
	$f_mot_de_passe_Recordset2 = "-1";
  
  
  
  
  $login = $_POST['username'];
  $password = $_POST['password'];
  $f_nom_utilisateur_Recordset2 = $_POST['username'];
 //	echo $f_nom_utilisateur_Recordset2 ;
  $f_mot_de_passe_Recordset2 = $_POST['password'];
 //	 echo $f_mot_de_passe_Recordset2 ;
  //mysql_select_db($database_MaConnexion, $MaConnexion);
$query_Recordset2 = sprintf("SELECT * FROM utilisateurs WHERE cin = %s  AND password = %s and confirmer=1", GetSQLValueString($f_nom_utilisateur_Recordset2, "text"),GetSQLValueString($f_mot_de_passe_Recordset2, "text"));


$Recordset2 = mysqli_query($base,$query_Recordset2) or die(mysqli_error());
$row_Recordset2 = mysqli_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysqli_num_rows($Recordset2);


if  ($totalRows_Recordset2 >= 1) {
		 	session_start();
 $_SESSION['id_utilisateurs'] = $row_Recordset2['id_utilisateurs'];
 $_SESSION['cin'] = $row_Recordset2['cin'];
 $_SESSION['nom'] = $row_Recordset2['nom'];
 $_SESSION['prenom'] = $row_Recordset2['prenom'];
 $_SESSION['profil'] = $row_Recordset2['profil'];
 $_SESSION['date_naissance'] = $row_Recordset2['date_naissance'];
 $_SESSION['groupe'] = $row_Recordset2['groupe_id_groupe'];



if($_SESSION['profil']=="root"){
	header('Location: ../listepubadmin.php');

}
if($_SESSION['profil']=="admin"){
	header('Location: ../listepubadmin.php');
}
if($_SESSION['profil']=="ens"){
	header('Location: ../index1.php');
}
if($_SESSION['profil']=="etud"){
	header('Location: ../index1.php');
}

exit();
} else {
	?> 
<center><div style="background-color: gold;margin-top: 110px ; margin-left:350px; margin-right:350px">
		 <strong> Verfiez votre cordonnées.Il peut etre que votre compte pas encore activé par l'administration</strong>
</div>	</center>	
		<?php }
   
}		
   
   ?>
   
   				

   
   
   
   
</html>
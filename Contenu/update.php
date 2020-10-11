<?php
session_start();
if (isset($_SESSION['id']))
{
include("config.php");
$x=$_SESSION['id'];
$req=mysqli_query($base,"select * from membre where id='$x' ");
$req2=mysqli_query($base,"select * from image i,membre m where m.id='$x' and $x=i.id ");

if($l=mysqli_fetch_array($req))
{
	if($k=mysqli_fetch_array($req2))
	echo "<form action='' method='POST'>";

	echo "Nom: <input type='text' name='nom' value='$l[7]'><br>";
	echo "Prenom: <input type='text' name='prenom' value='$l[6]'><br>";
	echo "Date de naissance: <input type='text' name='datenais' value='$l[4]'><br>";
	echo "E-mail: <input type='text' name='email' value='$l[5]'><br>";
	echo "Login: <input type='text' name='login' value='$l[1]'><br>";
	echo "Mot de passe: <input type='password' name='pass' value='$l[2]'><br>";
	echo "Confirmer: <input type='password' name='repass' value='$l[3]'><br>";
	echo "Photo: <input type='text' name='photo' value='$k[2]'><br>";
	//echo $k[2];
	echo  "<input type='submit' name='ok' value='Modifier'></form>";	

}

if(isset($_POST['ok']))
{
	$Nom=$_POST['nom'];
	$Prenom=$_POST['prenom'];
	$datenais=$_POST['datenais'];
	$email=$_POST['email'];
    $Login=$_POST['login'];
	$PASSWD=$_POST['pass'];
	$repass=$_POST['repass'];
	$photo=$_POST['photo'];

	$res=mysqli_query($base,"update membre set Nom='$Nom',Prenom='$Prenom',datenais='$datenais',login='$Login',pass='$PASSWD',pass_confirm='$repass' where id='$x' ");
	$res2=mysqli_query($base,"update image i,membre m  set i.chemin='$photo' where m.id='$x' and $x=i.id ");
	mysqli_close($base);
	header("location:update.php");

}
}
else
{
	header("location:login.php");
}
?>
<?php 

// connexion 
	
include("config.php");



//user
function testuser(){
	// On prolonge la session
//session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['ens']))
{
// Si inexistante ou nulle, on redirige vers le formulaire de login
header('Location: index.php');
exit();
}
if($_SESSION['etud']==0){
header('Location: index.php');
exit();
}
}





//Admin
function testSupAdmin(){
	// On prolonge la session
//session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['root']))
{
// Si inexistante ou nulle, on redirige vers le formulaire de login
header('Location: index.php');
exit();
}
if($_SESSION['root']==0){
header('Location: index.php');
exit();
}
}


//Admin
function testAdmin(){
	// On prolonge la session
//session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['admin']))
{
// Si inexistante ou nulle, on redirige vers le formulaire de login
header('Location: index.php');
exit();
}
if($_SESSION['admin']==0){
header('Location: index.php');
exit();
}
}


//enseiganat
function testEns(){
	// On prolonge la session
//session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['ens']))
{
// Si inexistante ou nulle, on redirige vers le formulaire de login
header('Location: index.php');
exit();
}
if($_SESSION['ens']==0){
header('Location: index.php');
exit();
}
}

//etudiant
function testEtu(){
	// On prolonge la session
//session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['etud']))
{
// Si inexistante ou nulle, on redirige vers le formulaire de login
header('Location: index.php');
exit();
}
if($_SESSION['etud']==0){
header('Location: index.php');
exit();
}
}




//function GetSQLValueString
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }
include("config.php");

  $theValue = function_exists("mysql_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($base,$theValue);

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



?>
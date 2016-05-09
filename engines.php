<?php require_once('Connections/gestionstock.php'); ?>
<?php

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

  
//  add yamaha engine  

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formulaire_ajout")) {
  // add a visitor   
 $insertSQL = sprintf(" INSERT INTO yamaha (hpyam,qteyam,priceyam) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['hp'], "text"),
                       GetSQLValueString($_POST['qte'], "text"),
                       GetSQLValueString($_POST['price'], "text"));
                     
    mysql_select_db($database_gestionstock, $gestionstock);
  $Result1 = mysql_query($insertSQL, $gestionstock) or die(mysql_error());
  $insertGoTo = "yamaha.php";
  header(sprintf("Location: %s", $insertGoTo));                    
}
 //  add  Tohatsu engines

if ((isset($_POST["MM_insert_totatsu"])) && ($_POST["MM_insert_totatsu"] == "formulaire_ajout_totatsu")) {
  // add a visitor   
 $insertSQL = sprintf(" INSERT INTO tohatsu (hptu,qtetu,pricetu) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['hp'], "text"),
                       GetSQLValueString($_POST['qte'], "text"),
                       GetSQLValueString($_POST['price'], "text"));
                     
    mysql_select_db($database_gestionstock, $gestionstock);
  $Result1 = mysql_query($insertSQL, $gestionstock) or die(mysql_error());
  $insertGoTo = "tohatsu.php";
  header(sprintf("Location: %s", $insertGoTo));                    
}                     

  //  add others engines                    
                       
 
  





?>
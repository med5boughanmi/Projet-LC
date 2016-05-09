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

  
//  add wood boat 

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formulaire_ajout")) {
 
 $insertSQL = sprintf(" INSERT INTO woodboat (numb,hei,wei,len) VALUES (%s, %s, %s, %s )",
                       GetSQLValueString($_POST['nbwood'], "text"),
                       GetSQLValueString($_POST['hgwood'], "text"),
                       GetSQLValueString($_POST['wgwood'], "text"),
                       GetSQLValueString($_POST['lgwood'], "text"));
                   
  mysql_select_db($database_gestionstock, $gestionstock);
  $Result1 = mysql_query($insertSQL, $gestionstock) or die(mysql_error());
  $insertGoTo = "woodboat.php";
  header(sprintf("Location: %s", $insertGoTo)); 
  
}                     
//  add aliminum boat 

if ((isset($_POST["MM_insert_aluwood"])) && ($_POST["MM_insert_aluwood"] == "formulaire_ajout_aluwood")) {
 
 $insertSQL = sprintf(" INSERT INTO aluboat (numbal,heial,weial,lenal) VALUES (%s, %s, %s, %s )",
                       GetSQLValueString($_POST['nbalu'], "text"),
                       GetSQLValueString($_POST['hgalu'], "text"),
                       GetSQLValueString($_POST['wgalu'], "text"),
                       GetSQLValueString($_POST['lgalu'], "text"));
                   
  mysql_select_db($database_gestionstock, $gestionstock);
  $Result1 = mysql_query($insertSQL, $gestionstock) or die(mysql_error());
  $insertGoTo = "alluboat.php";
  header(sprintf("Location: %s", $insertGoTo)); 
  
}                     
 //  add fiberboat 

if ((isset($_POST["MM_insert_fb"])) && ($_POST["MM_insert_fb"] == "formulaire_ajout_fb")) {
 
 $insertSQL = sprintf(" INSERT INTO fibboat (nbfb,heifb,weifb,lenfb) VALUES (%s, %s, %s, %s )",
                       GetSQLValueString($_POST['nbfiber'], "text"),
                       GetSQLValueString($_POST['hgfiber'], "text"),
                       GetSQLValueString($_POST['wgfiber'], "text"),
                       GetSQLValueString($_POST['lgfiber'], "text"));
                   
  mysql_select_db($database_gestionstock, $gestionstock);
  $Result1 = mysql_query($insertSQL, $gestionstock) or die(mysql_error());
  $insertGoTo = "fiberboat.php" ;
  header(sprintf("Location: %s", $insertGoTo)); 
  
}                                 

                       
                       
 

// list visitors  

mysql_select_db($database_gestionstock, $gestionstock);
$query_visiteur = "SELECT * FROM visitor order by  datevis";
$visiteur= mysql_query($query_visiteur, $gestionstock) or die(mysql_error());
$row_visiteur = mysql_fetch_assoc($visiteur);
$totalRows_visiteur= mysql_num_rows($famille);


?>
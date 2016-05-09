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

  
//  add avisitor  

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formulaire_ajout")) {
  // add a season  
 $insertSQL = sprintf(" INSERT INTO fishingses (season,maincatch,price,usedeng,impl) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['season'], "text"),
                       GetSQLValueString($_POST['season2'], "text"),
                       GetSQLValueString($_POST['price'], "text"),
                       GetSQLValueString($_POST['season3'], "text"),
                       GetSQLValueString($_POST['implement'], "text"));
  mysql_select_db($database_gestionstock, $gestionstock);
  $Result1 = mysql_query($insertSQL, $gestionstock) or die(mysql_error());
  $insertGoTo = "fishingseason.php";
  header(sprintf("Location: %s", $insertGoTo)); 
  
}                     
                      
            
                      

                       
                       
 

// list visitors  
/*
mysql_select_db($database_gestionstock, $gestionstock);
$query_visiteur = "SELECT * FROM visitor order by  datevis";
$visiteur= mysql_query($query_visiteur, $gestionstock) or die(mysql_error());
$row_visiteur = mysql_fetch_assoc($visiteur);
$totalRows_visiteur= mysql_num_rows($famille); */ 


?>
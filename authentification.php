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



if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "connexion")) {
  $updateSQL = sprintf("UPDATE `user` SET `date`=%s WHERE login=%s",
                       GetSQLValueString($_POST['lastco'], "date"),
                       GetSQLValueString($_POST['username'], "text"));

  mysql_select_db($database_gestionstock, $gestionstock);
  $Result1 = mysql_query($updateSQL, $gestionstock) or die(mysql_error());
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "statut";
  $MM_redirectLoginSuccess = "index.php";
  $MM_redirectLoginFailed = "page_de_redirection.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_gestionstock, $gestionstock);
    
  $LoginRS__query=sprintf("SELECT login, motdepasse, statut FROM `user` WHERE login=%s AND motdepasse=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString(sha1($password), "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $gestionstock) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'statut');
    
  if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;       

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];  
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
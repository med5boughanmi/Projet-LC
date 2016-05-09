<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_co = "localhost";
$database_co = "company";
$username_co = "root";
$password_co = "root";
$co = mysql_pconnect($hostname_co, $username_co, $password_co) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
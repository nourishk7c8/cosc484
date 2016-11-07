<?php
/*
* db.inc
* These are the DBMS credentials and the database name
*/
$hostName = "localhost:/usr/cslocal/mysqldata/triton.sock";
$databaseName = "nkhan2db";  //(replace with your database name)
$username = "nkhan2";            // (replace with your database username)
$password = "Cosc*f48n";               //(replace with your database password)
// Show an error and stop the script
function showerror()
{
if (mysql_error())
die("Error " . mysql_errno() . " : " . mysql_error());
else
die ("Could not connect to the DBMS");
}
?>
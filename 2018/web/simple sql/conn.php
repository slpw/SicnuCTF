<?php
error_reporting(E_ALL & ~E_DEPRECATED);
$con = mysql_connect(LOCALHOST,USERNAME,PASSWORD);
if(!$con)
{
   die('error'.mysql_error());
}
mysql_select_db("ctf")
?>
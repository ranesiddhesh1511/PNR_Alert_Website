<?php

$hostname = "localhost";
$username = "freepnra_sidace";
$password = "2i{c05%WZle&";

$con = mysql_connect($hostname,$username,$password);

 $Pnr = $_POST['Pnr'];
 echo $Pnr;
 $Mobile = $_POST['Mobile'];
 echo $Mobile;

if(!$con)
{
   die("Could not connect to Database");
   echo "No connection"
}

mysql_select_db("freepnra_userinfo",$con)

$sql = "INSERT INTO `freepnra_userinfo`.`users` (`id`, `pnr`, `mobile`) VALUES (NULL, '$Pnr', '$Mobile')";

mysql_query($sql,$con);


?>
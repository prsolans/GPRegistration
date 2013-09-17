<?php	
/* 	ATK SERVER  		 		 	 	 		 		 		 		 		 	
	$host = "egv-vmjmladb01";
	$user = "root";
	$pass = "splhcb!@11";
	$database = "globalprize";
	$baseurl = "http://www.atkearney.com.mx/globalprize";
	$sitename = "Global Prize Registration";
*/

/* LOCAL SERVER VARIABLE */
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$database = "globalprize";
	$baseurl = "http://localhost:8888/globalprize";
	$sitename = "Global Prize Registration";

    $con=mysql_connect($host,$user,$pass);
	if ($con)
	{
		mysql_select_db($database);
	}
	else
	{
		echo("Connection failed!");
	}

	$today = date('Y-m-d h:i:s');

?>
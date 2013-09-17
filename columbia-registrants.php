<?php	 	

$con = mysql_connect("localhost","root","Joomla");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

	// display main school info
$teamQuery = 'SELECT * FROM `joomla`.`21042010_chronoforms_gp_reg_cbs`';
$teamResult = mysql_query($teamQuery);

while($teamRow = mysql_fetch_array($teamResult)){
	echo "<h2>" .$teamRow['team_name']. "</h2>";	
}

?>

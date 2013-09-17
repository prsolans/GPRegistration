<?php	 	

$con = mysql_connect("egv-vmjmladb01","root","splhcb!@11");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

	// display main school info
$schoolQuery = 'SELECT * FROM `__global`.`gp_reg_booth`';
$teamResult = mysql_query($schoolQuery);

echo "<table border=1><tr><th>Team Name</th><th>Team Captain</th><th>Captain Email</th><th>Captain Phone</th><th>Member #2</th><th>Member #2 email</th><th>Member #3</th><th>Member #3 email</th><th>Member #4</th><th>Member #4 email</th><th>Time of submission</th></tr>";

while($teamRow = mysql_fetch_array($teamResult)){
	echo "<tr><td>" .$teamRow['team_name']. "</td><td>" .$teamRow['team_1']. "</td><td>" .$teamRow['team_1_email']. "</td><td>" .$teamRow['team_1_phone']. "</td><td>" .$teamRow['team_2']. "</td><td>" .$teamRow['team_2_email']. "</td><td>" .$teamRow['team_3']. "</td><td>" .$teamRow['team_3_email']. "</td><td>" .$teamRow['team_4']. "</td><td>" .$teamRow['team_4_email']. "</td><td>" .$teamRow['recordtime']. "</td></tr>";	
}

echo "</table>";
?>

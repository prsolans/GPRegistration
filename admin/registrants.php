<?php	 	

include('../config/connect.php');
include('../views/header.php'); 


$school = $_GET['school'];
	// display main school info
$schoolQuery = 'SELECT * FROM `'.$database.'`.`Registrations` WHERE school='.$school;
$teamResult = mysql_query($schoolQuery);

echo "<table class='table table-striped'><tr><th>Team Name</th><th>Team Captain</th><th>Captain Email</th><th>Captain Phone</th><th>Member #2</th><th>Member #2 email</th><th>Member #3</th><th>Member #3 email</th><th>Member #4</th><th>Member #4 email</th><th>Time of submission</th></tr>";

while($teamRow = mysql_fetch_array($teamResult)){
	echo "<tr><td>" .$teamRow['team_name']. "</td><td>" .$teamRow['team_1']. "</td><td>" .$teamRow['team_1_email']. "</td><td>" .$teamRow['team_1_phone']. "</td><td>" .$teamRow['team_2']. "</td><td>" .$teamRow['team_2_email']. "</td><td>" .$teamRow['team_3']. "</td><td>" .$teamRow['team_3_email']. "</td><td>" .$teamRow['team_4']. "</td><td>" .$teamRow['team_4_email']. "</td><td>" .$teamRow['recordtime']. "</td></tr>";	
}

echo "</table>";
?>

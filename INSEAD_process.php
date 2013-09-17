<?php	 	 		 		 	 	 		 		 		 		 		 	
	$host = "egv-vmjmladb01";
	$user = "root";
	$pass = "splhcb!@11";
	$database = "__global";
	
    $con=mysql_connect($host,$user,$pass);
	if ($con)
	{
		mysql_select_db($database);
	}
	else
	{
		echo("Connection failed!");
	}
	
	$available = 15;
	
	$query = "SELECT * FROM gp_reg_insead";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);
	
	if ($count>$available) {
		echo "<style type='text/css'>
		body, table {
		font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif;
		}</style>Thank you for your team's interest in the 2012 A.T. Kearney Global Prize Case Competition.  
		We have already received registrations for the maximum number of teams; however, your team will be placed on the wait list in the order 
		of submissions and a Global Prize member will reach out to you should a team position open up.";
		}
	else {			
		$team = $_GET['team_name'];
		$team1 = $_GET['team_1'];
		$team1_email = $_GET['team_1_email'];
		$team1_phone = $_GET['team_1_phone'];

		$team2 = $_GET['team_2'];
		$team2_email = $_GET['team_2_email'];

		$team3 = $_GET['team_3'];
		$team3_email = $_GET['team_3_email'];

		$team4 = $_GET['team_4'];
		$team4_email = $_GET['team_4_email'];
		
		$timestamp = date('Y-m-d h:i:s');
		
		$insert = "INSERT INTO gp_reg_insead VALUES ('', '".$timestamp."', '".$team."', '".$team1."', '".$team1_email."', '".$team1_phone."', '".$team2."', '".$team2_email."', '".$team3."', '".$team3_email."', '".$team4."', '".$team4_email."')";
		
		mysql_query($insert);
		
		$to      = 'Sanjana.Dayal@atkearney.com';
$subject = 'Global Prize Registration';
$message = '<html><h2>Registration Form: INSEAD 2012</h2><br/>';

$message .= '<strong>Team details</strong><p>';
$message .= $team;
$message .= '<p>Team captain<br/>';
$message .= $team1.' - '.$team1_email.' ('.$team1_phone.')<br/>';
$message .= $team2.' - '.$team2_email.'<br/>';
$message .= $team3.' - '.$team3_email.'<br/>';
$message .= $team4.' - '.$team4_email.'</p>';

$message .= 'Registration submitted at '.$timestamp;

$headers = 'From: webform@atkearney.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	// To send HTML mail, the Content-type header must be set
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= "\r\nBcc: paul.solans@atkearney.com\r\n\r\n";

$status = mail($to, $subject, $message, $headers);

echo "<style type='text/css'>
body, table {
font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif;
}
</style>Congratulations.  Thank you for signing your team up to participate in the 2012 A.T. Kearney Global Prize Case Competition.  Your team is now registered.";

	}
	
	
	
?>
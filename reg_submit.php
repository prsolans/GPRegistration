<?php	 	 		 		 	 	 		 		 		 		 		 	
include('config/connect.php');

$school = $_GET['school'];			
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
		
$insert = "INSERT INTO `".$database."`.`Registrations` VALUES ('', '".$timestamp."', '".$team."', '".$team1."', '".$team1_email."', '".$team1_phone."', '".$team2."', '".$team2_email."', '".$team3."', '".$team3_email."', '".$team4."', '".$team4_email."', '".$school."')";
mysql_query($insert);

$select = "SELECT * FROM `".$database."`.`Schools` WHERE id=$school";
$result = mysql_query($select);

while($row = mysql_fetch_array($result)){
	$contactemail = $row['contactemail'];
	$name = $row['name'];
}		

$to      = $contactemail;
$subject = 'Global Prize Registration';
$message = '<html><h2>Registration Form: '.$name.'</h2><br/>';

$message .= '<strong>Team details</strong><p>';
$message .= $team;
$message .= '<p>Team captain<br/>';
$message .= $team1.' - '.$team1_email.' ('.$team1_phone.')<br/>';
$message .= $team2.' - '.$team2_email.'<br/>';
$message .= $team3.' - '.$team3_email.'<br/>';
$message .= $team4.' - '.$team4_email.'</p>';

$message .= 'Registration submitted at '.$timestamp;

$headers = 'From: webform@atkearney.com' . "\r\n" .
    'Reply-To: '.$contactemail.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	// To send HTML mail, the Content-type header must be set
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= "\r\nBcc: paul.solans@atkearney.com\r\n\r\n";

$status = mail($to, $subject, $message, $headers);
echo $to;
echo $headers;
echo $message;
echo "<style type='text/css'>
body, table {
font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif;
}
</style>Thank you for signing up your team to participate in the 2013 A.T. Kearney Global Prize Case Competition. The school lead will get back to you with specific next steps based on a team prioritization process.";
		
	
?>
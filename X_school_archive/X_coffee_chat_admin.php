<html>
<head>
</head>
<body>
<?php	 	

$con = mysql_connect("localhost","root","Joomla");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
?>

<h1>Recruiting Coffee Chat Administration Panel</h1>
<?php	 	

	// get school from URL
$thisSchool = $_GET["school"];

	// build query of general school information
$schoolQuery = 'SELECT * FROM `joomla`.`x_rec_schools` WHERE schoolID = ' .$thisSchool .';';
$schoolResult = mysql_query($schoolQuery);

	// display school info
while($schoolRow = mysql_fetch_array($schoolResult)){
	echo "<h2>" .$schoolRow['schoolName']. "</h2>";	
}

include 'manage_current_chats.php';
include 'create_new_chat.php';
include 'active_chat_dates.php';

?>

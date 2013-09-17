<?php	 	

$con = mysql_connect("localhost","root","Joomla");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

	// Retrieve data from Query String
$thisSchool = $_GET['school'];
$newDate = $_GET['newDate'];
$selectedDate = $_GET['dates'];

	// Escape User Input to help prevent SQL Injection
$thisSchool = mysql_real_escape_string($thisSchool);
$newDate = mysql_real_escape_string($newDate);
$selectedDate = mysql_real_escape_string($selectedDate);

	//debugging
if ($newDate != ""){
	echo "<br/>nd: ";
	echo $newDate;
}

else {
echo "<br/>sd: ";
echo $selectedDate;
}

	// display main school info
$schoolQuery = 'SELECT * FROM `joomla`.`x_rec_schools` WHERE schoolID = ' .$thisSchool .';';
$schoolResult = mysql_query($schoolQuery);

while($schoolRow = mysql_fetch_array($schoolResult)){
	echo "<h2>" .$schoolRow['schoolName']. "</h2>";	
}

	//insert new date into the database
$datesQuery = 'INSERT INTO  `joomla`.`x_rec_chatdates` (slot_date, schoolID) VALUES ("' .$newDate. '", ' .$thisSchool. ');';
mysql_query($datesQuery);

	//display all scheduled dates
echo "<h3>Currently scheduled dates:</h3>";

$datesDisplay = 'SELECT * FROM `joomla`.`x_rec_chatdates` WHERE schoolID = ' .$thisSchool .';';
$datesResult = mysql_query($datesDisplay);

while($datesRow = mysql_fetch_array($datesResult)){
	echo "<br/>";
	echo $datesRow['slot_date'];	
}

echo "<p><a href='http://www.atkearney.com/images/test/order.php?schoolChosen=" .$thisSchool. ">Return to school scheduling page</a><p>";

?>

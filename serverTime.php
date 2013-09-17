<?php	 	


$con = mysql_connect("localhost","root","Joomla");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

	// Retrieve data from Query String
$school = $_GET['school'];
$chatDate = $_GET['chatDate'];

	// Escape User Input to help prevent SQL Injection
$school mysql_real_escape_string($school);
$chatDate = mysql_real_escape_string($chatDate);

	//build query
$datesQuery = 'SELECT * FROM `joomla`.`x_rec_chatdates` WHERE schoolID = ' .$thisSchool .';';

$datesResult = mysql_query($datesQuery);

echo "<select name=dates>";

	//execute query
while($datesRow = mysql_fetch_array($datesResult)){
	echo "<option value='" .$datesRow['id']. "'>" .$datesRow['slot_date']. "</option>";	
}

echo "</select>";

while($datesRow = mysql_fetch_array($datesResult)){
	echo " ".$datesRow['slot_date']."<br/>";	
}

?>

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

	// display main school info
$schoolQuery = 'SELECT * FROM `joomla`.`x_rec_schools` WHERE schoolID = ' .$thisSchool .';';
$schoolResult = mysql_query($schoolQuery);



while($schoolRow = mysql_fetch_array($schoolResult)){
	echo "<h2>" .$schoolRow['schoolName']. "</h2>";	
}

	//debugging
if ($newDate != ""){
		
		//insert new date into the database
	$datesQuery = 'INSERT INTO  `joomla`.`x_rec_chatdates` (slot_date, schoolID) VALUES ("' .$newDate. '", ' .$thisSchool. ');';
	mysql_query($datesQuery);
	
	$thisDate = $newDate;
	echo "<h3>Currently selected dated:</h3>";
	echo $newDate;

}

else {
	$thisDate = $selectedDate;

	
			//display scheduled date
echo "<h3>Currently selected dated:</h3>";

$datesDisplay = 'SELECT * FROM `joomla`.`x_rec_chatdates` WHERE schoolID = ' .$thisSchool .' AND id = ' .$thisDate.';';

$datesResult = mysql_query($datesDisplay);

while($datesRow = mysql_fetch_array($datesResult)){
	echo $datesRow['slot_date'];	
}
}




echo "<p><a href='http://www.atkearney.com/images/test/coffee_chat_admin.php?school=" .$thisSchool. "'>Return to school scheduling page</a></p>";
echo "<h3>Select from the available time slots, and include the appropriate number of individuals who can submit for that time slot.</h3>";


$timeQuery = 'SELECT * FROM `joomla`.`x_rec_timeslots_twenty`;';
$timeResult = mysql_query($timeQuery);

	// create the form

echo "<form name='timePicker' action='slotPicker.php'>";
echo "<input type='hidden' name='school' value='" .$thisSchool. "' />";
echo "<input type='hidden' name='date' value='" .$thisDate. "' />";

$slotCounter = 0;

while($timeRow = mysql_fetch_array($timeResult)){
	echo "<input style='width: 20px; padding-right: 5px;'type='checkbox' name='timeChosen" .$slotCounter. "' value='" .$timeRow['id']. "'>" . $timeRow['slot_time'];
	echo "<br/>";	
	$slotCounter++;
}

?>
<input type="submit" value="Submit" />
</form>

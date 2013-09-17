

<h1>Recruiting Coffee Chat Administration Panel</h1>
<?php	 	

$con = mysql_connect("localhost","root","Joomla");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
?>

<?php	 	

	// get school from URL
$thisSchool = $_GET["schoolChosen"];

	// build query of general school information
$schoolQuery = 'SELECT * FROM `joomla`.`x_rec_schools` WHERE schoolID = ' .$thisSchool .';';
$schoolResult = mysql_query($schoolQuery);

	// display school info
while($schoolRow = mysql_fetch_array($schoolResult)){
	echo "<h2>" .$schoolRow['schoolName']. "</h2>";	
}

	// build query of selected schools currently scheduled dates
$datesQuery = 'SELECT * FROM `joomla`.`x_rec_chatdates` WHERE schoolID = ' .$thisSchool .';';
$datesResult = mysql_query($datesQuery);

echo "<p>Choose from currently scheduled dates, or add a new date to the schedule.</p><p>Current Dates:<br/>";

echo "<form name='newDaterSelect' action='Date_add_select.php'>";
echo "<input type='hidden' name='school' value='" .$thisSchool. "' />";
echo "<select name='dates'>";
while($datesRow = mysql_fetch_array($datesResult)){
	echo "<option value='" .$datesRow['id']. "'>" .$datesRow['slot_date']. " - " .$datesRow['chatLength']. " minute sessions</option>";	
}

echo "</select>";

?>
<br/>Add new date: <input type="text" name="newDate" />
<input type="submit" value="Submit" />
</form>
</div>




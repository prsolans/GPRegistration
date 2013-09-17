<html>
<head>
<script type="text/javascript" src="http://www.atkearney.com/images/global/scripts/prototype.js"></script>
<script type="text/javascript" src="http://www.atkearney.com/images/global/scripts/tablekit.js"></script>
</head>
<body>
<?php	 	

include('config/connect.php');
?>

<div style='float: left; width: 300px; height: 400px; overflow: auto; border: 3px solid black; background: yellow;'>

<?php	 	

	// get school from URL
$thisSchool = $_GET["schoolChosen"];

	// build query of general school information
$schoolQuery = 'SELECT * FROM `'.$database.'`.`x_rec_schools` WHERE schoolID = ' .$thisSchool .';';
$schoolResult = mysql_query($schoolQuery);

	// display school info
while($schoolRow = mysql_fetch_array($schoolResult)){
	echo "<h2>" .$schoolRow['schoolName']. "</h2>";	
}

	// build query of selected schools currently scheduled dates
$datesQuery = 'SELECT * FROM `'.$database.'`.`x_rec_chatdates` WHERE schoolID = ' .$thisSchool .';';
$datesResult = mysql_query($datesQuery);

echo "<p>Choose from currently scheduled dates, or add a new date to the schedule.</p><p>Current Dates:<br/>";

echo "<form name='newDaterSelect' action='updateDate.php'>";
echo "<input type='hidden' name='school' value='" .$thisSchool. "' />";
echo "<select name='dates'>";
while($datesRow = mysql_fetch_array($datesResult)){
	echo "<option value='" .$datesRow['id']. "'>" .$datesRow['slot_date']. "</option>";	
}

echo "</select>";

?>
<br/>Add new date: <input type="text" name="newDate" />
<input type="submit" value="Submit" />
</form>
</div>

<div style='width: 300px; height: 400px; overflow: auto; border: 3px solid black; background: green;'>
<?php	 	
$timeQuery = 'SELECT * FROM `'.$datebase.'`.`booth_slots`;';

$timeResult = mysql_query($timeQuery);

while($timeRow = mysql_fetch_array($timeResult)){
	echo "<input type='checkbox' name='timeChosen' value='" .$timeRow['id']. "'>" . $timeRow['slot_time'];
	echo "<br/>";	
}

echo "</div>";

?>
</body></html>

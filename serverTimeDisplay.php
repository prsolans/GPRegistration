
<?php	 	
// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('UTC');

// Prints something like: Monday 8th of August 2005 03:12:46 PM
$currentDate = date('l jS \of F Y h:i A'); 
echo "<p>Current Date/Time: " . $currentDate . " - UTC</p>";

// Date of opening
$openSesame = "Friday 24rd of September 2010 12:00 PM";


//
if ($currentDate > $openSesame) {
	echo "September 24, 8:00AM (Friday)";	
	echo "<a href='http://www.atkearney.com/index.php/component/option,com_chronocontact/chronoformname,gp_reg_cbs/lang,en/'>Click here to register</a>";	
}
else {
	echo "September 24, 8:00AM (Friday)";	
}

?>

<hr />


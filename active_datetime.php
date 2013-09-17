<?php	 	
include('config/connect.php');
  
echo "<h1>Global Prize Registration Times</h1>";

$today = date('Y-M-d H:i:s');
$convertedDate = date('D, M d, Y H:i');
echo "<h2>Current server time (America/Chicago): " .$convertedDate. "</h2>";


 function rel_time($from, $to = null)
 {
  $to = (($to === null) ? (time()) : ($to));
  $to = ((is_int($to)) ? ($to) : (strtotime($to)));
  $from = ((is_int($from)) ? ($from) : (strtotime($from)));

  $units = array
  (
   "year"   => 29030400, // seconds in a year   (12 months)
   "month"  => 2419200,  // seconds in a month  (4 weeks)
   "week"   => 604800,   // seconds in a week   (7 days)
   "day"    => 86400,    // seconds in a day    (24 hours)
   "hour"   => 3600,     // seconds in an hour  (60 minutes)
   "minute" => 60,       // seconds in a minute (60 seconds)
   "second" => 1         // 1 second
  );

  $diff = abs($from - $to);
  $suffix = (($from > $to) ? ("from now") : ("ago"));

  foreach($units as $unit => $mult)
   if($diff >= $mult)
   {
    $and = (($mult != 1) ? ("") : ("and "));
    $output .= ", ".$and.intval($diff / $mult)." ".$unit.((intval($diff / $mult) == 1) ? ("") : ("s"));
    $diff -= intval($diff / $mult) * $mult;
   }
  $output .= " ".$suffix;
  $output = substr($output, strlen(", "));

  return $output;
 }

function date_at_timezone($format, $locale, $timestamp=null){
    
    if(is_null($timestamp)) $timestamp = time();
    
    //Prepare to calculate the time zone offset
    $current = time();
    
    //Switch to new time zone locale
    $tz = date_default_timezone_get();
    date_default_timezone_set($locale);
    
    //Calculate the offset
    $offset = time() - $current;
    
    //Get the date in the new locale
    $output = date($format, $timestamp - $offset);
    
    //Restore the previous time zone
    date_default_timezone_set($tz);
    
    return $output;
    
}

//Examples
$t = time();

echo "<h3>Americas/New York (ServerTime +1):  ";
print date_at_timezone("D, M d, Y H:i", "America/New_York", $t); 
echo "</h3><h3>Europe/London (ServerTime +6): ";
print date_at_timezone("D, M d, Y H:i", "Europe/London", $t); 
echo "</h3><h3>Europe/Paris (ServerTime +7): ";
print date_at_timezone("D, M d, Y H:i", "Europe/Paris", $t); 
echo "</h3>";

  
// display main school info
$schoolQuery = 'SELECT * FROM `'.$database.'`.`gpr_schools` ORDER BY reg_open DESC';
$schoolResult = mysql_query($schoolQuery);

while($schoolRow = mysql_fetch_array($schoolResult)){
	echo "<div style='width: 300px; height: 320px; font-size: 12px; border: 2px solid black; margin: 15px; padding: 15px; float: left;'><h2>" .$schoolRow['school']. "</h2>";	
	echo "School time zone (relative to current US Central Time): +";
	echo $schoolRow['time_offset'];
	echo "<p>Registration is set to open at:<br/>".$schoolRow['reg_open']."</p>";
	echo "<p>Registration is set to close at:<br/>".$schoolRow['reg_close']."</p>";

	echo "<div style='border: 1px gray solid; margin: 7px; padding: 7px;'>";
	
	if(strtotime($schoolRow['reg_close']) <= strtotime($today)){ 
			echo "Registration is now closed";
		}
	else{
			
		if(strtotime($schoolRow['reg_open']) >= strtotime($today)){ 
					
			echo "Regisration will open in:<br/> ";

			echo rel_time($schoolRow['reg_open']);
		
		}
		else {
			echo "<A href=''>Click here to register</a>";	
		}
			
		
		
	}	
		
			
			echo "</div></div>";
}

?>


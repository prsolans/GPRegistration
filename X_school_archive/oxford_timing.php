<?php	 	

$con = mysql_connect("egv-vmjmladb01","root","splhcb!@11");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$today = date('Y-M-d H:i:s');
  
// display school info: ID=1 -> Carnegie Mellon
$schoolQuery = 'SELECT * FROM `__global`.`gpr_schools` WHERE id="15"';
$schoolResult = mysql_query($schoolQuery);

while($schoolRow = mysql_fetch_array($schoolResult)){


	if(strtotime($schoolRow['reg_close']) <= strtotime($today)){ 
			echo "<span style='font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif; padding: 0; margin: 0;'>Registration is now closed.</span>";
		}
	else{		
		if(strtotime($schoolRow['reg_open']) >= strtotime($today)){ 
			echo "<span style='font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif; padding: 0; margin: 0;'>A link to registration will be available ";
			
			echo date("d F Y", strtotime($schoolRow['reg_open']));
				
			echo ".</span>";			
		}
		else {
			echo "<span style='font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif; padding: 0; margin: 0;'>Registration for Global Prize 2012 is now open. <A href='http://www.atkearney.com/careers/global-prize-registration-sa-239-d-business-school/register' target='_parent'>Click here to register</a></div>";	

		}	
	}	
}

?>


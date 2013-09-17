<?php	 	

$con = mysql_connect("egv-vmjmladb01","root","splhcb!@11");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$today = date('Y-M-d H:i:s');
  
// display school info: ID=1 -> Carnegie Mellon
$schoolQuery = 'SELECT * FROM `__global`.`gpr_schools` WHERE id="2"';
$schoolResult = mysql_query($schoolQuery);

while($schoolRow = mysql_fetch_array($schoolResult)){
	
	if(strtotime($schoolRow['reg_close']) <= strtotime($today)){ 
			echo "Registration is now closed";
		}
	else{		
		if(strtotime($schoolRow['reg_open']) >= strtotime($today)){ 
			echo "";			
		}
		else {
			echo "<div style='border: 2px black solid; background: #999; text-align: center;'><A href='http://www.atkearney.com/index.php/component/option,com_chronocontact/chronoformname,gp_reg_cbs/lang,en/'>Click here to register</a></div>";	

		}	
	}	
}

?>


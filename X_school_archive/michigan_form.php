<?php	 	 		 		 	 	 		 		 		 		 		 	
	$host = "egv-vmjmladb01";
	$user = "root";
	$pass = "splhcb!@11";
	$database = "__global";
	
    $con=mysql_connect($host,$user,$pass);
	if ($con)
	{
		mysql_select_db($database);
	}
	else
	{
		echo("Connection failed!");
	}
?>
<style type="text/css">
body, table {
font: 12px/1.5 Arial, Helvetica, Verdana, sans-serif;
}
</style>
<form action="http://www.atkearney.co.uk/globalPrize/michigan_process.php" name="GPReg">
<table>
    <tr><td style="width: 170px">Team name</td><td >
    <input class="cf_inputbox required" maxlength="200" size="30" title="" id="text_1" name="team_name" type="text" value="TEAM NAME" />
</td></tr>

    <tr><td style="width: 170px">Team Captain</td><td >
    <input class="cf_inputbox required" maxlength="200" size="30" title="" id="text_2" value="Captain Name" name="team_1" type="text" />
</td></tr>
	<tr><td>Team Captain email</td><td >
    <input class="cf_inputbox required validate-email" maxlength="200" size="30" title="" id="text_3" name="team_1_email" type="text"value="Email address"/>
</td></tr>
	<tr><td>Team Captain phone</td><td >    <input class="cf_inputbox required" maxlength="200" size="30" title="" id="text_4" name="team_1_phone" type="text"value="Phone number"/>
</td></tr>

    <tr><td style="width: 170px">Team Member #2</td><td >
    <input class="cf_inputbox required" maxlength="200" size="30" title="" id="text_6" name="team_2" type="text" value="Name" />
</td></tr>
	<tr><td>Team Member #2 email</td><td >
    <input class="cf_inputbox required validate-email" maxlength="200" size="30" title="" id="text_7" name="team_2_email" type="text"value="Email address" />
</td></tr>

    <tr><td style="width: 170px">Team Member #3</td><td >
    <input class="cf_inputbox required" maxlength="200" size="30" title="" id="text_9" name="team_3" type="text" value="Name" />
</td></tr>
	<tr><td>Team Member #3 email</td><td >	 <input class="cf_inputbox required validate-email" maxlength="200" size="30" title="" id="text_10" name="team_3_email" type="text"value="Email address"/>
</td></tr>

    <tr><td style="width: 170px">Team Member #4</td><td >
    <input class="cf_inputbox required" maxlength="200" size="30" title="" id="text_12" name="team_4" type="text" value="Name"/>
</td></tr>
	<tr><td>Team Member #4 email</td><td >
    <input class="cf_inputbox required validate-email" maxlength="200" size="30" title="" id="text_13" name="team_4_email" type="text"value="Email address"/>
</td></tr>
<tr><td></td><td ><input value="Submit" name="button_5" type="submit" /></td></tr></table>
</div>
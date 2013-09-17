<?php                                     

include('../config/connect.php');
  
  $id = $_GET['id'];
  $name = $_GET['name'];
  $reg_open = $_GET['reg_open'];
  $reg_close = $_GET['reg_close'];
  $contactname = $_GET['contactname'];
  $contactemail = $_GET['contactemail'];
  $formurl = $_GET['formurl'];

  $query = "UPDATE `".$database."`.`Schools` SET name='".$name."', reg_open='".$reg_open."', reg_close='".$reg_close."', contactname='".$contactname."', contactemail='".$contactemail."', formurl='".$formurl."' WHERE id='".$id."';";
  //echo $query;
  //echo mysql_query($query) ? OK : FAIL;
  mysql_query($query);
    
 
  header("Location: ".$baseurl."/admin/school_detail.php?school=".$id."&alert=1");
?>

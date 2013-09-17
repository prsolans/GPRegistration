<?php                                     

include('../config/connect.php');
include('../views/header.php'); 

?>

<div class='row'>
  <div class='span12'>
    <?php                                     

$thisSchool = $_GET['school'];
$schoolDisplay = 'SELECT * FROM `'.$database.'`.`Schools` WHERE id = ' .$thisSchool. ';';
$schoolResult = mysql_query($schoolDisplay);

while($thisSchool = mysql_fetch_array($schoolResult)){
  $id = $thisSchool['id'];
  $name = $thisSchool['name'];
  $reg_open = $thisSchool['reg_open'];
  $reg_close = $thisSchool['reg_close'];
  $contactname = $thisSchool['contactname'];
  $contactemail = $thisSchool['contactemail'];
  $formurl = $thisSchool['formurl'];
}

  $label='';
  if($reg_close < $today){
      $label='<span class="label label-important">Closed</span>';  
  }
  elseif($reg_open <= $today && $reg_close > $today){
      $label='<span class="label label-success">Open</span>';  
  }
  else {
      $label='<span class="label label-info">Upcoming</span>';  
  }
?>
<h2><?php echo $name;?></h2>

</div>
</div>


<div class='row'>
  <div class='span6'>
        <?php 
      if($_GET['alert']){
          echo "<div class='alert alert-success'>Update successful.</div>";
      }
    ?>
    <table class='table'>
        <tr><td>Status</td><td><?php echo $label; ?></td></tr>
        <tr><td>Registration Opens</td><td><?php echo $reg_open; ?></td></tr>
        <tr><td>Registration Closes</td><td><?php echo $reg_close; ?></td></tr>
        <tr><td>Contact Name</td><td><?php echo ucfirst($contactname); ?></td></tr>
        <tr><td>Contact Email</td><td><?php echo $contactemail; ?></td></tr>
        <tr><td>Form URL</td><td><a target='_blank' href='<?php echo $formurl; ?>'><?php echo $formurl; ?></a></td></tr>
</table>
<a class='btn' href='edit_school.php?school=<?php echo $id; ?>'>Edit School Details</a>
  </div>
    <div class='span6'>
<ul><li><a target='_blank' href='../reg_form.php?school=<?php echo $id; ?>'>See the form</a></li>
  <li><a href='registrants.php?school=<?php echo $id; ?>'>See registrations</a></li>
</ul>
  </div>
</div>




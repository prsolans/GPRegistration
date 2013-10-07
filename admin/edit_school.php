<?php                                     

include('../config/connect.php');
$thisSchool = $_GET['school'];

?>

<?php include('../views/header.php'); ?>

<div class='row'>
  <div class='span12'>
    <h2>Add new Global Prize school</h2>

</div>
</div>

<h3>School Details</h3>

<?php if(isset($_GET['flag'])): ?>
    <?php 
      if($_GET['alert']){
          echo "<div class='alert alert-success'>Update successful.</div>";
      }
    ?>
<form action='edit_school_action.php' name='editSchool'>
  <input type='hidden' name='flag' value='new'/>
<table class='table table-striped'>
<tr><td>Name</td><td><input type='text' name='name' value=''>
</td></tr>
<tr><td>Registration Opens (Local Time)</td><td><input type='text' name='reg_open' value=''></td></tr>
<tr><td>Registration Closes (Local Time)</td><td><input type='text' name='reg_close' value=''></td></tr>
<tr><td>Contact Name</td><td><input type='text' name='contactname' value=''></td></tr>
<tr><td>Contact Email</td><td><input type='text' name='contactemail' value=''></td></tr>
<tr><td>Live URL</td><td><input type='text' name='formurl' value=''></td></tr>
</table>
<br/><input type="submit" class='btn btn-success' value="Add School"/>
</form>

<?php else: ?>

    <?php                                     
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
?>

<h2><?php echo $name; ?></h2>

</div>
</div>

<h3>Edit School Details</h3>
    <?php 
      if($_GET['alert']){
          echo "<div class='alert alert-success'>Update successful.</div>";
      }
    ?>
<form action='edit_school_action.php' name='editSchool'>
<input type='hidden' name='id' value='<?php echo $id ; ?>' />
<table class='table table-striped'>
<tr><td>Name</td><td><input type='text' name='name' value='<?php echo $name; ?>'>
</td></tr>
<tr><td>Registration Opens (Local Time)</td><td><input type='text' name='reg_open' value='<?php echo $reg_open; ?>'></td></tr>
<tr><td>Registration Closes (Local Time)</td><td><input type='text' name='reg_close' value='<?php echo $reg_close; ?>'></td></tr>
<tr><td>Contact Name</td><td><input type='text' name='contactname' value='<?php echo $contactname; ?>'></td></tr>
<tr><td>Contact Email</td><td><input type='text' name='contactemail' value='<?php echo $contactemail; ?>'></td></tr>
<tr><td>Live URL</td><td><input type='text' name='formurl' value='<?php echo $formurl; ?>'></td></tr>
</table>
<br/><input type="submit" class='btn btn-success' value="Update School Details"/>
</form>
<?php endif; ?>
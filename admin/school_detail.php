<?php                                     

include('../config/connect.php');
include('../views/header.php'); 

?>
<script src="../js/moment.js"></script>

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

  $open = strtotime($reg_open);
  $open = date("F d, h:ia", $open);

}

  $label='';
  if($today <= $reg_open){
      $label='<span class="label label-info">Upcoming</span>';  
  }
  elseif($today >= $reg_close){
      $label='<span class="label label-important">Closed</span>';  
  }

  else {
          $label='<span class="label label-success">Open</span>';  
  }
?>

</div>
</div>


<div class='row'>
  <div class='span6'>
    <h2><?php echo $name;?></h2>

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
<hr/>
<ul><li><a target='_blank' href='../reg_form.php?school=<?php echo $id; ?>'>See the form</a></li>
  <li><a href='registrants.php?school=<?php echo $id; ?>'>See registrations</a></li>
</ul>
  </div>
    <div class='span6'>
      <legend>Front-end display</legend>
      
      <div class='well'>
        <script>
        moment().format();

        var todayIs = moment();
        var whenOpens = moment("<?php echo $reg_open; ?>");
        var whenCloses= moment("<?php echo $reg_close; ?>");

        if (todayIs <= whenOpens ) //NOT OPEN YET
        document.write('<b><?php echo $open; ?></b>')
        else if (todayIs >= whenCloses) //CLOSED
        document.write('<b>Registration is now closed.</b>')
        else
        document.write('<b><a href="<?php echo $formurl; ?>">Click to register</a></b>')

      </script>
      </div>
      <style>
      .script {
        display: block;
        margin: 0;
        padding: 0;
      }
      </style>
      <p>Place the following between <code>&lt;script&gt;&lt;/script&gt;</code> tags in the portlet to present the content shown above.</p>
      <pre><code>
        <script class='script' type='text/plain'>
        moment().format();

        var todayIs = moment();
        var whenOpens = moment("<?php echo $reg_open; ?>");
        var whenCloses= moment("<?php echo $reg_close; ?>");

        if (todayIs <= whenOpens ) //NOT OPEN YET
        document.write('<b><?php echo $open; ?></b>')
        else if (todayIs >= whenCloses) //CLOSED
        document.write('<b>Registration is now closed.</b>')
        else
        document.write('<b><a href="<?php echo $formurl; ?>">Click to register</a></b>')

        </script>
      </code></pre>

      </div>

  </div>
</div>




<?php                                     

include('../config/connect.php');
include('../views/header.php'); 

?>
<script src="../js/moment.js"></script>
<script src="../js/moment.timezone.js"></script>

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
  $time_offset = $thisSchool['time_offset'];
  $contactname = $thisSchool['contactname'];
  $contactemail = $thisSchool['contactemail'];
  $formurl = $thisSchool['formurl'];

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

  $time_offset_display = -($time_offset);
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
        <tr><td>Timezone</td><td>UTC/GMT <?php if($time_offset_display > 0) {echo "+";}?><?php echo $time_offset_display; ?> hours<br/>Diff from CST: +<?php echo $time_offset_display+5;?> hours</td></tr>
        <tr><td>Registration Opens (CST)</td><td><?php echo $reg_open; ?></td></tr>
        <tr><td>Registration Closes (CST)</td><td><?php echo $reg_close; ?></td></tr>
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
            <p>What will visitors to the site see?</p>

      <div id='display' class='well'>

        <script>
        moment().format();

        var display = document.getElementById('display');

        var todayIs = moment();
        var whenOpens = moment("<?php echo $reg_open; ?>");
        var whenCloses= moment("<?php echo $reg_close; ?>");

        whenOpens.zone(<?php echo $time_offset?>);

        if (todayIs <= whenOpens ) {
        display.innerHTML = (whenOpens.format('dddd, MMMM D h:mma '));
        }
        else if ( todayIs > whenCloses) {
          display.innerHTML = "Registration is closed.";
        }
        else {
          display.innerHTML = "<a href=''>Click to register</a>";
        }
      </script>
      </div>
      <style>
      .script {
        display: block;
        margin: 0;
        padding: 0;
      }
      </style>
        <legend>Installation steps</legend>
      <ol><li>Paste the following at the top of the portlet HTML content.</p>
      <pre><code>&lt;script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.1.0/moment.min.js"&gt;&lt;/script&gt;</code></pre></li>
      <li>Paste the following between <code>&lt;script&gt;&lt;/script&gt;</code> tags immediately following the previous step.</p>
      <pre><code><script class='script' type='text/plain'>
        moment().format();

        var display = document.getElementById('display');

        var todayIs = moment();
        var whenOpens = moment("<?php echo $reg_open; ?>");
        var whenCloses= moment("<?php echo $reg_close; ?>");

        whenOpens.zone(<?php echo $time_offset?>);

        if (todayIs <= whenOpens ) {
        display.innerHTML = (whenOpens.format('dddd, MMMM D h:mma '));
        }
        else if ( todayIs > whenCloses) {
          display.innerHTML = "Registration is closed.";
        }
        else {
          display.innerHTML = "<a href=''>Click to register</a>";
        }
        </script></code></pre>
    </li>
    <li>Paste this code in the second &lt;td&gt; tag in the "Registration site live" row.
      <pre><code>&lt;div id='display'&gt;&lt;/div&gt;</code></pre>
    <li>Publish the portlet, and then refresh the page.</li></ol>
      </div>

  </div>
</div>




 <?php                                      
include('../config/connect.php');

$schoolList = 'SELECT * FROM `'.$database.'`.`Schools` ORDER BY reg_open DESC, name ASC';
$schoolResult = mysql_query($schoolList);
?>
<?php include('../views/header.php'); ?>

<div class='row'>
  <span class='span12'>
<h2>Schools</h2>
<table id='mainTable' class='table table-striped'>
<thead><tr><th>Status</th><th>School</th><th>Opening</th><th>Closing</th><th>Main Contact</th><th>Actions</th></tr></thead>
<tbody>
<?php 

while($item = mysql_fetch_array($schoolResult)){

  if($item['reg_close'] < $today){
      $label='<span class="label label-important">Closed</span>';  
  }
  elseif($item['reg_open'] <= $today && $item['reg_close'] > $today){
      $label='<span class="label label-success">Open</span>';  
  }
  else{
      $label='<span class="label label-info">Upcoming</span>';  
  }

echo '<tr><td>'.$label.'</td><td><a href="school_detail.php?school='.$item['id'].'">'.$item['name'].'</a></td>';
echo '<td>'.$item['reg_open'].'</td>';
echo '<td>'.$item['reg_close'].'</td>';
echo '<td><a href="mailto:'.$item['contactemail'].'">'.$item['contactname'].'</a></td>';
echo '<td><a href="school_detail.php?school='.$item['id'].'">Details</a> | <a href="edit_school.php?school='.$item['id'].'">Edit</a></td></tr>';
}
  
?>
</tbody></table>
<script type="text/javascript">
$(function() {

  $.extend($.tablesorter.themes.bootstrap, {
    // these classes are added to the table. To see other table classes available,
    // look here: http://twitter.github.com/bootstrap/base-css.html#tables
    table      : 'table table-bordered',
    header     : 'bootstrap-header', // give the header a gradient background
    footerRow  : '',
    footerCells: '',
    icons      : '', // add "icon-white" to make them white; this icon class is added to the <i> in the header
    sortNone   : 'bootstrap-icon-unsorted',
    sortAsc    : 'icon-chevron-up',
    sortDesc   : 'icon-chevron-down',
    active     : '', // applied when column is sorted
    hover      : '', // use custom css here - bootstrap class may not override it
    filterRow  : '', // filter row class
    even       : '', // odd row zebra striping
    odd        : ''  // even row zebra striping
  });

  // call the tablesorter plugin and apply the uitheme widget
  $("table").tablesorter({
    // this will apply the bootstrap theme if "uitheme" widget is included
    // the widgetOptions.uitheme is no longer required to be set
    theme : "bootstrap",

    widthFixed: true,

    headerTemplate : '{content} {icon}', // new in v2.7. Needed to add the bootstrap icon!

    // widget code contained in the jquery.tablesorter.widgets.js file
    // use the zebra stripe widget if you plan on hiding any rows (filter widget)
    widgets : [ "uitheme", "filter", "zebra" ],

    widgetOptions : {
      // using the default zebra striping class name, so it actually isn't included in the theme variable above
      // this is ONLY needed for bootstrap theming if you are using the filter widget, because rows are hidden
      zebra : ["even", "odd"],

      // reset filters button
      filter_reset : ".reset"

      // set the uitheme widget to use the bootstrap theme class names
      // this is no longer required, if theme is set
      // ,uitheme : "bootstrap"

    }
  })


});
</script>
</ul>
</div>
</div>
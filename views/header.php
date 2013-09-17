<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <!-- Obtain Bootstrap style sheet from CDN (online service) so it doesn't have to be on my machine -->
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">    
     <link href="<?php echo $baseurl; ?>/css/app.css" rel="stylesheet" media="screen">    
     <link href="<?php echo $baseurl; ?>/css/theme.bootstrap.css" rel="stylesheet" media="screen">    

</head>
<body>
  
<!-- Obtain latest version of jquery automatically -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<!-- Obtain Bootstrap javascript from CDN (online service) so it doesn't have to be on my machine -->
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
<script src='<?php echo $baseurl; ?>/js/jquery.tablesorter.js'></script>
<script src='<?php echo $baseurl; ?>/js/jquery.tablesorter.widgets.js'></script>
  <div class='topbar'><h1><?php echo $sitename; ?></h1><p><a href='index.php'>Home</a></p></div>

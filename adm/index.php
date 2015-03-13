<?php
  // Start the session
  require_once('../global/startsession.php');

  // Insert the page header
  $page_title = '主選單';
  require_once('header.php');

  require_once('../global/appvars.php');
  require_once('../global/connectvars.php');

  // Show the navigation menu
  require_once('navmenu.php');

  // Connect to the database 
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 

  // Retrieve the user data from MySQL
  $query = "";
  $data = mysqli_query($dbc, $query);

  // Loop through the array of user data, formatting it as HTML
?>

<?php
  // Insert the page footer
  require_once('footer.php');
?>

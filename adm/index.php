<?php //////// Header ////////

  // Start the session
  require_once('../global/startsession.php');

  // Insert the page header
  $page_title = '主選單';
  require_once('header.php');

  // Declare the constants and global variables
  require_once('../global/appvars.php');

?>

<?php //////// Navigation Menu ////////

  require_once('navmenu.php');

?>

<?php //////// Footer ////////

  require_once('footer.php');

?>

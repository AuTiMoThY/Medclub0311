<?php
  // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['user_id'])) {
    // echo '<p class="login">Please <a href="/global/login.php">log in</a> to access this page.</p>';
    $login_url = 'http://' . $_SERVER['HTTP_HOST'] . '/global/login.php';
    header('Location: ' . $login_url);
    exit();
  }
?>

<?php
  // Generate the navigation menu
  echo '<nav><ul class="menu1">';
  if (isset($_SESSION['username'])) {
    echo '<li><a href="index.php">&#10084;&nbsp;主選單</a></li>';
    echo '<li><a href="category.php">&#10084;&nbsp;產品管理</a></li>';
    echo '<li><a href="../global/logout.php">&#10084;&nbsp;登出 (' . $_SESSION['username'] . ')</a></li>';
  }
  else {
    echo '<li><a href="index.php">&#10084;&nbsp;主選單</a></li>';
    echo '<li><a href="../global/login.php">&#10084;&nbsp;登入</a></li>';
    echo '<li><a href="../global/signup.php">&#10084;&nbsp;注冊</a></li>';
  }
  echo '</nav>';
?>


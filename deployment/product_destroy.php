<?php
  require_once('connectvars.php');

  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
  or die('Could not connect: ' . mysqli_error($conn) . '<br>');
  echo 'Connected successfully<br>';

  // select table
  $result = mysqli_query($conn, "SHOW TABLES LIKE '" . DBT_PRODUCT . "'");
  if(mysqli_num_rows($result) > 0) {
    // drop table DBT_PRODUCT
    mysqli_query($conn, "DROP TABLE " . DBT_PRODUCT) 
    or die('Could not drop table: ' . mysqli_error($conn) . '<br>');
    echo "Table " . DBT_PRODUCT . " dropped successfully<br>";
  }
  else {
    echo "Table " . DBT_PRODUCT . " not exist<br>";
  }

  // drop database DB_NAME
  mysqli_query($conn, "DROP DATABASE " . DB_NAME) 
  or die('Could not drop database: ' . mysqli_error($conn) . '<br>');
  echo "Database " . DB_NAME . " dropped successfully<br>";

  mysqli_close($conn);
?>


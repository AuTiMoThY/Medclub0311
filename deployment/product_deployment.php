<?php
  require_once('connectvars.php');

  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) 
  or die('Could not connect: ' . mysqli_error($conn) . '<br>');
  echo 'Connected successfully<br>';

  // select database
  $result = mysqli_select_db($conn, DB_NAME);
  if(!$result) {
    // create database
    $sql = "CREATE DATABASE " . DB_NAME;
    $result = mysqli_query($conn, $sql) 
    or die('Could not create database: ' . mysqli_error($conn) . '<br>');
    mysqli_select_db($conn, DB_NAME)
    or die('Could not select database: ' . mysqli_error($conn) . '<br>');
    echo "Database " . DB_NAME . " created successfully<br>";
  } 
  else {
    echo "Select database..<br>";
  }

  // select table
  $result = mysqli_query($conn, "SHOW TABLES LIKE '" . DBT_PRODUCT . "'");
  if(mysqli_num_rows($result) <= 0) {
    // create table 'sparkruby_user'
    $sql = "CREATE TABLE " . DBT_PRODUCT . " (" .
      "id INT AUTO_INCREMENT," .
      "category INT," .
      "subcategory INT," .
      "display_order INT," .
      "name_zh_tw VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_bin," .
      "name_en VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_bin," .
      "description VARCHAR(511) CHARACTER SET utf8 COLLATE utf8_bin," .
      "off_the_shelf INT," .
      "image VARCHAR(80) CHARACTER SET utf8 COLLATE utf8_bin," .
      "note VARCHAR(511) CHARACTER SET utf8 COLLATE utf8_bin," .
      "date DATETIME," .
      "PRIMARY KEY (id))";
    $result = mysqli_query($conn, $sql) 
    or die('Could not create table: ' . DBT_PRODUCT . 
      '. ' . mysqli_error($conn) . '<br>');
    echo "Table " . DBT_PRODUCT . " created successfully<br>";
  }
  else {
    echo "Select table..<br>";
  }

  // select a sample
  $sql = "SELECT id, category, subcategory, display_order, name_zh_tw, name_en, description, off_the_shelf, image, note, date FROM " . DBT_PRODUCT . " WHERE id = 1";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "Superuser sparkruby exist!<br>";
    while($row = mysqli_fetch_array($result)) {
      echo "id: " . $row["id"]. 
           " - category: " . $row["category"].
           " - subcategory: " . $row["subcategory"].
           " - display_order: " . $row["display_order"].
           " - name_zh_tw: " . $row["name_zh_tw"].
           " - name_en: " . $row["name_en"]. 
           " - description: " . $row["description"].
           " - off_the_shelf: " . $row["off_the_shelf"].
           " - image: " . $row["image"].
           " - note: " . $row["note"].
           " - date: " . $row["date"].
           "<br>";
    }
  } else {
    $sql = 'INSERT INTO ' . DBT_PRODUCT . ' VALUES (0, 1, 1, 1, "精密儀器", "SWIFTPET&reg; Pipetting Controller", "產品描述", 1, "<html></html>", "swiftpet.png", CURRENT_TIME())';
    mysqli_query($conn, $sql) 
    or die('Could not insert sample product item: ' . mysqli_error($conn) . '<br>');
    echo "Sample product item created successfully<br>";
  }

  mysqli_close($conn);
?>


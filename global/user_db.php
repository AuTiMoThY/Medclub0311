<?php
define('P_ROOT', 1);
define('P_USER', 10);
define('S_ACTIVE', 1);
define('S_INACTIVE', 0);
// select table
function select_t_user($conn) {  
  $result = mysqli_query($conn, "SHOW TABLES LIKE '" . DBT_USER . "'");
  if(mysqli_num_rows($result) <= 0) {
    // create table
    $sql = "CREATE TABLE " . DBT_USER . " (" .
      "user_id INT AUTO_INCREMENT," .
      "join_date DATETIME," .
      "password VARCHAR(40)," .
      "permission INT," .
      "status INT," .
      "email VARCHAR(150)," .
      "username VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_bin," .
      "first_name VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_bin," .
      "last_name VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_bin," .
      "PRIMARY KEY (user_id))";
    $result = mysqli_query($conn, $sql) 
    or die('Could not create table: ' . DBT_USER . 
      '. ' . mysqli_error($conn) . '<br>');
    // create the first user
    $sql = 'INSERT INTO ' . DBT_USER . 
           ' VALUES (0, NOW()' . 
           ', SHA("sparkruby")' .
           ', ' . P_ROOT . 
           ', ' . S_ACTIVE . 
           ', "' . 'sparkruby1@gmail.com' . '"' .
           ', "' . 'root' . '"' .
           ', "' . 'Stanley' . '"' .
           ', "' . 'Huang' . '"' .
           ')';
    mysqli_query($conn, $sql) 
    or die('Could not insert user "root": ' . 
      mysqli_error($conn) . '<br>');
  }
}
// drop table
function drop_t_user($conn) {
  $result = mysqli_query($conn, "SHOW TABLES LIKE '" . DBT_USER . "'");
  if($result && mysqli_num_rows($result) > 0) {
    // drop table 
    mysqli_query($conn, "DROP TABLE " . DBT_USER) 
    or die('Could not drop table: ' . DBT_USER . ', ' . mysqli_error($conn) . '<br>');
  }
}
// query username password
function query_t_user($dbc, $user_username, $user_password) {
  $query = "SELECT user_id, username FROM " . DBT_USER . " WHERE username = '$user_username' AND password = SHA('$user_password')";
  $data = mysqli_query($dbc, $query);

  if ($data && mysqli_num_rows($data) == 1) {
    // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
    return mysqli_fetch_array($data);
  }
  return NULL;
}

?>

<?php
// select table
function select_t_subcategory($conn) {  
  $result = mysqli_query($conn, "SHOW TABLES LIKE '" . DBT_SUBCATEGORY . "'");
  if(mysqli_num_rows($result) <= 0) {
    // create table
    $sql = "CREATE TABLE " . DBT_SUBCATEGORY . " (" .
      "subcategory_id INT AUTO_INCREMENT," .
      "category_id INT," .
      "name_zh_tw VARCHAR(80) CHARACTER SET utf8 COLLATE utf8_bin," .
      "display_order INT," .
      "status INT," .
      "PRIMARY KEY (subcategory_id))";
    $result = mysqli_query($conn, $sql) 
    or die('Could not create table: ' . DBT_SUBCATEGORY . 
      '. ' . mysqli_error($conn) . '<br>');
  }
}
// drop table
function drop_t_subcategory($conn) {
  $result = mysqli_query($conn, "SHOW TABLES LIKE '" . DBT_SUBCATEGORY . "'");
  if(mysqli_num_rows($result) > 0) {
    // drop table 
    mysqli_query($conn, "DROP TABLE " . DBT_SUBCATEGORY) 
    or die('Could not drop table: ' . DBT_SUBCATEGORY . ', ' . mysqli_error($conn) . '<br>');
  }
}
// count acting by category_id
function count_t_subcategory_acting_by_category_id($conn) {
  $sql = "SELECT category_id, COUNT(*) AS count FROM " . DBT_SUBCATEGORY . 
         " WHERE status = 1 GROUP BY category_id ORDER BY category_id";
  $result = mysqli_query($conn, $sql);
  $count_array = array();
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
      $count_array[$row['category_id']] = $row['count'];
    }
  }
  return $count_array;
}
// Prepare Count of Acting/Nonacting Subcategory Items with category_id
function count_t_subcategory_in_category_id_with_act_nonact($conn, $category_id) {
  $sql = "SELECT status, COUNT(*) AS count FROM " . DBT_SUBCATEGORY . 
         " WHERE category_id = " . $category_id . " GROUP BY status ORDER BY status";
  $result = mysqli_query($conn, $sql);
  $count_array = array();
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
      $count_array[$row['status']] = $row['count'];
    }
  }
  return $count_array;
}
// get name_zh_tw by subcategory_id
function get_t_subcategory_name_zh_tw_by_subcategory_id($conn, $subcategory_id) {
  $sql = "SELECT name_zh_tw FROM " . DBT_SUBCATEGORY . 
         " WHERE subcategory_id = " . $subcategory_id;
  $result = mysqli_query($conn, $sql);
  $count_array = array();
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    return $row['name_zh_tw'];
  }
  return '';
}
?>

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
  if($result && mysqli_num_rows($result) > 0) {
    // drop table 
    mysqli_query($conn, "DROP TABLE " . DBT_SUBCATEGORY) 
    or die('Could not drop table: ' . DBT_SUBCATEGORY . ', ' . mysqli_error($conn) . '<br>');
  }
}
// category.php: count acting subcategories
function t_subcategory_acting_items_in_category_id_count($conn) {
  $sql = "SELECT category_id, COUNT(*) AS count FROM " . DBT_SUBCATEGORY . 
         " WHERE status = 1 GROUP BY category_id ORDER BY category_id";
  $result = mysqli_query($conn, $sql);
  $count_array = array();
  if ($result && mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
      $count_array[$row['category_id']] = $row['count'];
    }
  }
  return $count_array;
}
// subcategory.php: prepare Count of Acting/Nonacting Subcategory Items with category_id
function t_subcategory_act_nonact_items_of_category_id_in_status_count($conn, $category_id) {
  $sql = "SELECT status, COUNT(*) AS count FROM " . DBT_SUBCATEGORY . 
         " WHERE category_id = " . $category_id . " GROUP BY status ORDER BY status";
  $result = mysqli_query($conn, $sql);
  $count_array = array();
  if ($result && mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
      $count_array[$row['status']] = $row['count'];
    }
  }
  return $count_array;
}
// product.php: get name_zh_tw of subcategory_id
function t_subcategory_item_of_subcategory_id_in_name_zh_tw($conn, $subcategory_id) {
  $sql = "SELECT name_zh_tw FROM " . DBT_SUBCATEGORY . 
         " WHERE subcategory_id = " . $subcategory_id;
  $result = mysqli_query($conn, $sql);
  if ($result && mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    return $row['name_zh_tw'];
  }
  return '';
}
// product_edit.php: get category_id of subcategory_id
function t_subcategory_item_of_subcategory_id_in_category_id($conn, $subcategory_id) {
  $sql = "SELECT category_id FROM " . DBT_SUBCATEGORY . 
         " WHERE subcategory_id = " . $subcategory_id;
  $result = mysqli_query($conn, $sql);
  if ($result && mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    return $row['category_id'];
  }
  return '';
}
// product_edit.php: get name_zh_tw subcategory_id category_id array
function t_subcategory_array_in_name_zh_tw_subcategory_id_category_id($conn) {
  $sql = "SELECT name_zh_tw, subcategory_id, category_id FROM " . DBT_SUBCATEGORY . 
         " ORDER BY category_id";
  $result = mysqli_query($conn, $sql);
  $master_array = array();
  if ($result && mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
      if(!array_key_exists($row['category_id'], $master_array)) {
        $mappings = array();
        $master_array[$row['category_id']] = $mappings;
      }
      $master_array[$row['category_id']][$row['subcategory_id']] = $row['name_zh_tw'];
    }
  }
  return $master_array;
}
?>

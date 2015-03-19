<?php
// select table
function select_t_product($conn) {  
  $result = mysqli_query($conn, "SHOW TABLES LIKE '" . DBT_PRODUCT . "'");
  if($result && mysqli_num_rows($result) <= 0) {
    // create table
    $sql = "CREATE TABLE " . DBT_PRODUCT . " (" .
      "product_id INT AUTO_INCREMENT," .
      "subcategory_id INT," .
      "status INT," .
      "display_order INT," .
      "name_zh_tw VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_bin," .
      "name_en VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_bin," .
      "description VARCHAR(65500) CHARACTER SET utf8 COLLATE utf8_bin," .
      "image VARCHAR(80) CHARACTER SET utf8 COLLATE utf8_bin," .
      "note VARCHAR(511) CHARACTER SET utf8 COLLATE utf8_bin," .
      "PRIMARY KEY (product_id))";
    $result = mysqli_query($conn, $sql) 
    or die('Could not create table: ' . DBT_PRODUCT . 
      '. ' . mysqli_error($conn) . '<br>');
  }
}
// drop table
function drop_t_product($conn) {
  $result = mysqli_query($conn, "SHOW TABLES LIKE '" . DBT_PRODUCT . "'");
  if($result && mysqli_num_rows($result) > 0) {
    // drop table 
    mysqli_query($conn, "DROP TABLE " . DBT_PRODUCT) 
    or die('Could not drop table: ' . DBT_PRODUCT . ', ' . mysqli_error($conn) . '<br>');
  }
}
// subcategory.php: count acting products
function t_product_acting_items_in_subcategory_id_count($conn) {
  $sql = "SELECT subcategory_id, COUNT(*) AS count FROM " . DBT_PRODUCT . 
         " WHERE status = 1 GROUP BY subcategory_id ORDER BY display_order";
  $result = mysqli_query($conn, $sql);
  $count_array = array();
  if ($result && mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
      $count_array[$row['subcategory_id']] = $row['count'];
    }
  }
  return $count_array;
}
// product.php: prepare Count of Acting/Nonacting Product Items with subcategory_id
function t_product_act_nonact_items_of_subcategory_id_in_status_count($conn, $subcategory_id) {
  $sql = "SELECT status, COUNT(*) AS count FROM " . DBT_PRODUCT . 
         " WHERE subcategory_id = " . $subcategory_id . " GROUP BY status ORDER BY status";
  $result = mysqli_query($conn, $sql);
  $count_array = array();
  if ($result && mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
      $count_array[$row['status']] = $row['count'];
    }
  }
  return $count_array;
}
// category.php: show acting product number in category
function t_product_product_num_array($conn) {
  $sql = "SELECT sb.category_id AS category_id, COUNT(*) AS count " .
      "FROM " . DBT_PRODUCT . " AS pr " .
      "INNER JOIN " . DBT_SUBCATEGORY . " AS sb USING (subcategory_id) " .
      "WHERE pr.status = 1 GROUP BY sb.category_id ORDER BY sb.category_id";
  $result = mysqli_query($conn, $sql);
  $count_array = array();
  if ($result && mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
      $count_array[$row['category_id']] = $row['count'];
    }
  }
  // var_dump($count_array);
  return $count_array;
}
?>

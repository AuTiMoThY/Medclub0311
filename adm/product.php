<?php //////// Header ////////

  // Start the session
  require_once('../global/startsession.php');

  // Insert the page header
  $page_title = '產品管理';
  require_once('header.php');

  // Declare the constants and global variables
  require_once('../global/appvars.php');

?>

<?php //////// Navigation Menu ////////

  require_once('navmenu.php');

?>

<?php //////// Open Database ////////

  // Connect to the database
  require_once('../global/connectvars.php');
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
  or die('Could not connect: ' . mysqli_error($conn) . '<br>');

?>

<?php //////// Libraries ////////

  include_once('subcategory_db.php');
  include_once('product_db.php');

?>

<?php //////// Input Parameters ////////
  // The entries:
  //   Query product 
  //     1. subcategory.php  -> get: subcategory_id
  //   Insert/update product re-direct
  //     2. product_edit.php -> get: subcategory_id
  $subcategory_id = $_GET['subcategory_id'];
?>

<?php //////// Prepare Count of Acting/Nonacting Product Items with subcategory_id ////////
  $act_nonact_array = count_t_product_in_subcategory_id_with_act_nonact($conn,$subcategory_id);
  // $act_count: number of acting product items
  // $nonact_count: number of non-acting product items
  $act_count = isset($act_nonact_array[PDT_STATUS_ACT]) ? $act_nonact_array[PDT_STATUS_ACT] : 0;
  $nonact_count = isset($act_nonact_array[PDT_STATUS_NONACT]) ? $act_nonact_array[PDT_STATUS_NONACT] : 0;
?>

<?php //////// Add New Product //////// ?>
<section class="link1">
<h5><a href="product_edit.php?subcategory_id=<?php echo $subcategory_id; ?>">新增產品</a></h5>
</section>

<?php //////// Information //////// ?>
<section class="caption">
<h5>
  次分類： <?php echo get_t_subcategory_name_zh_tw_by_subcategory_id($conn,$subcategory_id); ?> <br>
  產品分類： <?php echo $act_count ?> 個&nbsp;顯示&nbsp;
  <?php echo $nonact_count ?> 個&nbsp;隱藏&nbsp;
</h5>
</section>

<?php //////// Product Table //////// ?>
<section>
<?php
  // Query Product data
  select_t_subcategory($conn);
  $sql = "SELECT product_id, name_zh_tw, name_en, display_order, status FROM " . DBT_product . 
         " WHERE subcategory_id = " . $subcategory_id . 
         " ORDER BY display_order";
  $result = mysqli_query($conn, $sql);
  if ($result && mysqli_num_rows($result) > 0) {
    echo '<table id="table">';
    echo '<tr class="header-row row">';
    echo '<th class="cell">中文名稱</th>';
    echo '<th class="cell">英文名稱</th>';
    echo '<th class="cell">顯示次序</th>';
    echo '<th class="cell">狀態</th>';
    echo '</tr>';
    while($row = mysqli_fetch_array($result)) {
      echo '<tr class="row">';
      echo '<td class="cell">';
      echo '<a href="product_edit.php?';
        echo 'product_id=' . $row['product_id'];
        echo 'subcategory_id=' . $subcategory_id;
        echo '&name_zh_tw=' . $row['name_zh_tw'];
        echo '&name_en=' . $row['name_en'];
        echo '&display_order=' . $row['display_order'];
        echo '&status=' . $row['status'];
      echo '">' . $row['name_zh_tw'] . '</a>';
      echo '</td>';
      echo '<td class="cell">' . $row['name_en'] . '</td>';
      echo '<td class="cell">' . $row['display_order'] . '</td>';
      echo '<td class="cell">' . ($row['status']==1?'顯示':'隱藏') . '</td>';
      echo '</tr>';
    }
    echo '</table>';
  }
  else {
    echo '<section class="msg1"><h5><p>尚無項目</p></h5></section>';
  }
?>
</section>

<?php //////// Close Database ////////

  mysqli_close($conn);

?>

<?php //////// Footer ////////

  require_once('footer.php');

?>

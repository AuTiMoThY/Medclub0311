<?php //////// Header ////////

  // Start the session
  require_once('../global/startsession.php');
  require_once('../global/admin_only.php');

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
  //   Query subcategory 
  //     1. category.php         -> get: category_id
  //   Insert/update subcategory re-direct
  //     2. subcategory_edit.php -> get: category_id
  $category_id = $_GET['category_id'];
?>

<?php //////// Prepare Count of Acting/Nonacting Subcategory Items with category_id ////////
  $act_nonact_array = t_subcategory_act_nonact_items_of_category_id_in_status_count($conn,$category_id);
  // $act_count: number of acting subcategory items
  // $nonact_count: number of non-acting subcategory items
  $act_count = isset($act_nonact_array[SBC_STATUS_ACT]) ? $act_nonact_array[SBC_STATUS_ACT] : 0;
  $nonact_count = isset($act_nonact_array[SBC_STATUS_NONACT]) ? $act_nonact_array[SBC_STATUS_NONACT] : 0;
?>

<?php //////// Direction //////// ?>
<section> 
<h5>
<?php 
  echo '<a href="category.php?">' . '產品管理' . '</a>' . '&gt';
  echo $g_category[$category_id];
?>
</h5>
</section>

<?php //////// Information //////// ?>
<section class="caption">
<h5>
  主分類： <?php echo $g_category[$category_id]; ?> <br>
  次分類： <?php echo $act_count ?> 個&nbsp;顯示&nbsp;
  <?php echo $nonact_count ?> 個&nbsp;隱藏&nbsp;
</h5>
</section>

<?php //////// Subcategory Table //////// ?>
<section>
<?php
  // Query subcategory data
  select_t_subcategory($conn);
  $prodcut_num_array = t_product_acting_items_in_subcategory_id_count($conn);
  $sql = "SELECT subcategory_id, name_zh_tw, display_order, status FROM " . DBT_SUBCATEGORY . 
         " WHERE category_id = " . $category_id . 
         " ORDER BY display_order";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo '<table id="table">';
    echo '<tr class="header-row row">';
    echo '<th class="cell">名稱</th>';
    echo '<th class="cell">商品數</th>';
    echo '<th class="cell">顯示次序</th>';
    echo '<th class="cell">狀態</th>';
    echo '<th class="cell">修改</th>';
    echo '</tr>';
    while($row = mysqli_fetch_array($result)) {
      echo '<tr class="row">';
      echo '<td class="cell">';
        echo '<a href="product.php?subcategory_id=' . $row['subcategory_id'] . '">';
        echo $row['name_zh_tw'];
        echo '</a>';
      echo '</td>';
      echo '<td class="cell">' . (array_key_exists($row['subcategory_id'], $prodcut_num_array) ? $prodcut_num_array[$row['subcategory_id']] : 0) . '</td>';
      echo '<td class="cell">' . $row['display_order'] . '</td>';
      echo '<td class="cell">' . ($row['status']==SBC_STATUS_ACT?'顯示':'隱藏') . '</td>';
      echo '<td class="cell">';
      echo '<a href="subcategory_edit.php?';
        echo 'subcategory_id=' . $row['subcategory_id'];
        echo '&category_id=' . $category_id;
        echo '&name_zh_tw=' . $row['name_zh_tw'];
        echo '&display_order=' . $row['display_order'];
        echo '&status=' . $row['status'];
      echo '">修改</a>';
      echo '</td>';
      echo '</tr>';
    }
    echo '</table>';
  }
  else {
    echo '<section class="msg1"><h5><p>尚無項目</p></h5></section>';
  }
?>
</section>

<?php //////// Add New Subcategory //////// ?>
<section class="link1">
<h5><a href="subcategory_edit.php?category_id=<?php echo $category_id; ?>">新增次分類</a></h5>
</section>

<?php //////// Close Database ////////

  mysqli_close($conn);

?>

<?php //////// Footer ////////

  require_once('footer.php');

?>

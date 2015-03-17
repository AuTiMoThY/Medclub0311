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

?>

<?php //////// Information //////// ?>
<section class="caption">
<h5>共有 <?php echo count($g_category); ?> 個主分類</h5>
</section>

<?php //////// Category Table //////// ?>
<section>
<table id="table">
<tr class="header-row row">
<th class="cell">名稱</th>
<th class="cell">次分類數</th>
<th class="cell">商品數</th>
</tr>
<?php
  $subcategory_count_array = count_t_subcategory_acting_by_category_id($conn);
  foreach ($g_category as $i => $category) {
    // It is not necessary all items in $g_category can be found in $subcategory_count_array
    $count = isset($subcategory_count_array[$i]) ? $subcategory_count_array[$i] : 0;
    echo '<tr class="row">';
    echo '<td class="cell">';
    echo '<a href="subcategory.php?category_id=' . $i . '">' . $category . '</a>';
    echo '</td>';
    echo '<td class="cell">' . $count . '</td>';
    echo '<td class="cell">' . 0 . '</td>';
    echo '</tr>';
  }
?>
</table>
</section>

<?php //////// Close Database ////////

  mysqli_close($conn);

?>

<?php //////// Footer ////////

  require_once('footer.php');

?>

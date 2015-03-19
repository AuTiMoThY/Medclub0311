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

<?php //////// Input Parameters ////////
  // The entries:
  //   Add a new subcategory: 
  //     1.1 subcategory.php      -> get:  category_id
  //     1.2 subcategory_edit.php -> post: [action], >subcategory_id<, category_id, name_zh_tw, display_order, status, [submit]
  //   Edit an existing subcategory:
  //     2.1 subcategory.php      -> get: subcategory_id, category_id, name_zh_tw, display_order, status
  //     2.2 subcategory_edit.php -> post: [action], subcategory_id, category_id, name_zh_tw, display_order, status, [submit]
  if(!isset($_POST['submit'])) {
    if(!isset($_GET['subcategory_id'])) {
       // Comes from 1.1: add a new subcategory
       $action_insert = SBC_OACTION_INSERT;
       $subcategory_id = -1;
       
       $name_zh_tw = "";
       $display_order = -1;
       $status = -1;
    }
    else {
       // Comes from 2.1: edit an existing subcategory
       $action_insert = SBC_OACTION_UPDATE;
       $subcategory_id = $_GET['subcategory_id'];
       
       $name_zh_tw = $_GET['name_zh_tw'];
       $display_order = $_GET['display_order'];
       $status = $_GET['status'];
    }
    $category_id = $_GET['category_id'];
  }
?>


<?php //////// Perform Submit ////////
  if(isset($_POST['submit'])) {
    if(isset($_POST['action']) && $_POST['action']==SBC_OACTION_INSERT) {
      // Comes from 1.2: add a new subcategory
      $sql = 'INSERT INTO ' . DBT_SUBCATEGORY . 
             ' VALUES (0, ' . $_POST['category_id'] . 
             ', "' . $_POST['name_zh_tw'] . 
             '", ' . $_POST['display_order'] . 
             ', ' . $_POST['status'] . ')';
    }
    else {
      // Comes from 2.2: edit an existing subcategory
      $sql = 'UPDATE ' . DBT_SUBCATEGORY . 
             ' SET category_id=' . $_POST['category_id'] . 
             ', name_zh_tw="' . $_POST['name_zh_tw'] . 
             '", display_order=' . $_POST['display_order'] . 
             ', status=' . $_POST['status'] .
             ' WHERE subcategory_id = ' . $_POST['subcategory_id'];
    }
    mysqli_query($conn, $sql) 
    or die('Could not ' . (isset($_POST['subcategory_id']) ? 
      'update subcategory(' . $_POST['subcategory_id'] . '): ' : 
      'insert subcategory: ') . 
      mysqli_error($conn) . '<br>');
    header("Location: subcategory.php?category_id=" . $_POST['category_id']);
    die(); // Exit program if this is a submit
  }
?>

<?php //////// Direction //////// ?>
<section> 
<h5>
<?php 
  echo '<a href="category.php?">' . '產品管理' . '</a>' . '&gt';
  echo '<a href="subcategory.php?category_id=' . $category_id . '">' . $g_category[$category_id] . '</a>';
?>
</h5>
</section>

<?php //////// Information //////// ?>
<section class="caption">
<h5>請輸入您要<?php echo $action_insert==SBC_OACTION_INSERT ? '新增' : '修改'; ?>的次分類資料</h5>
</section>


<script type="text/javascript">
function check_input() {
  if(document.subcategory_edit.category_id.value.length===0) return false;
  if(document.subcategory_edit.status.value.length===0) return false;
  if(document.subcategory_edit.display_order.value.length===0) return false;
  if(document.subcategory_edit.name_zh_tw.value.length===0) return false;
  return true;
}
</script>

<?php //////// Subcategory Table //////// ?>
<section>
<table id="table">
<form name='subcategory_edit' action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' onsubmit="return check_input();">
<input type='hidden' name='action' value="<?php echo $action_insert; ?>" >
<input type='hidden' name='subcategory_id' value="<?php echo $subcategory_id; ?>" >
<tr class="row">
  <th class="header-row cell">所屬主分類</th>
  <td class="cell">
    <select name='category_id'>
      <?php // iterate category
        foreach ($g_category as $i => $category) {
          echo "<option value='" . $i . "'" . ($category_id==$i?" selected":"") . ">";
          echo $category . "</option>";
        }
      ?>
    </select>
  </td>
</tr>
<tr class="row">
  <th class="header-row cell">次分類名稱</th>
  <td class="cell">
    <input type='text' name='name_zh_tw' value="<?php echo $name_zh_tw; ?>" size='20'>
  </td>
</tr>
<tr class="row">
  <th class="header-row cell">顯示次序</th>
  <td class="cell">
    <input type='number' name='display_order' value="<?php echo ($display_order==-1?'':$display_order); ?>" size='10'>
  </td>
</tr>
<tr class="row">
  <th class="header-row cell">顯示狀態</th>
  <td class="cell">
    <select name='status'>
      <option value='1' <?php echo ($status==SBC_STATUS_ACT?' selected':''); ?> >使用</option>
      <option value='0' <?php echo ($status==SBC_STATUS_NONACT?' selected':''); ?> >停止</option>
    </select>
  </td>
</tr>
<tr class="row">
  <td class="cell">
    <input type='reset' value='重填'><input type='submit' value='確定' name='submit'>
  </td>
</tr>
</form>
</table>
</section>

<?php //////// Close Database ////////

  mysqli_close($conn);

?>

<?php //////// Footer ////////

  require_once('footer.php');

?>

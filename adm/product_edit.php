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
  //   Add a new product: 
  //     1.1 product.php      -> get:  subcategory_id
  //     1.2 product_edit.php -> post: [action], >product_id<, subcategory_id, status, display_order, 
  //                                             name_zh_tw, name_en, description, image, note, [submit]
  //   Edit an existing product:
  //     2.1 product.php      -> get: product_id, subcategory_id, status, display_order, 
  //                                             name_zh_tw, name_en, description, image, note
  //     2.2 product_edit.php -> post: [action], product_id, subcategory_id, status, display_order, 
  //                                             name_zh_tw, name_en, description, image, note, [submit]
  if(!isset($_POST['submit'])) {
    if(!isset($_GET['product_id'])) {
       // Comes from 1.1: add a new product
       $action_insert = PDT_OACTION_INSERT;
       $product_id = -1;
       
       $status = -1;
       $display_order = -1;
       $name_zh_tw = "";
       $name_en = "";
       $description = "";
       $image = "";
       $note = "";
       $category_id = -1;
    }
    else {
       // Comes from 2.1: edit an existing product
       $action_insert = PDT_OACTION_UPDATE;
       $product_id = $_GET['product_id'];
       
       $status = $_GET['status'];
       $display_order = $_GET['display_order'];
       $name_zh_tw = $_GET['name_zh_tw'];
       $name_en = $_GET['name_en'];
       $description = html_entity_decode($_GET['description'], ENT_QUOTES, 'UTF-8');
       $image = $_GET['image'];
       $note = $_GET['note'];
    }
    $subcategory_id = $_GET['subcategory_id'];
    $category_id = t_subcategory_item_of_subcategory_id_in_category_id($conn, $subcategory_id);
    $target_image = PATH_PDT_IMAGE . $image;
  }
?>


<?php //////// Perform Submit ////////
  if(isset($_POST['submit'])) {
    // create image name 
    $image = $_FILES['image']['name'] . str_replace('/tmp/' , '' , $_FILES['image']['tmp_name']);
    $target_image = PATH_PDT_IMAGE . $image;
    // move tmp file to destination
    $b_new_image_available = move_uploaded_file($_FILES['image']['tmp_name'], $target_image);
    if(isset($_POST['action']) && $_POST['action']==PDT_OACTION_INSERT) {
      // Comes from 1.2: add a new product
      $sql = 'INSERT INTO ' . DBT_PRODUCT . 
             ' VALUES (0, ' . $_POST['subcategory_id'] . 
             ', ' . $_POST['status'] . 
             ', ' . $_POST['display_order'] . 
             ', "' . $_POST['name_zh_tw'] . '"' . 
             ', "' . $_POST['name_en'] . '"' . 
             ", '" . $_POST['description'] . "'" .
             ', "' . ($b_new_image_available ? $image : '') . '"' . 
             ', "' . $_POST['note'] . '"' .
             ')';
    }
    else {
      // Comes from 2.2: edit an existing product
      $sql = 'UPDATE ' . DBT_PRODUCT . 
             ' SET subcategory_id=' . $_POST['subcategory_id'] . 
             ', status=' . $_POST['status'] .
             ', display_order=' . $_POST['display_order'] .
             ', name_zh_tw="' . $_POST['name_zh_tw'] . '"' .
             ', name_en="' . $_POST['name_en'] . '"' .
             ", description='" . $_POST['description'] . "'" .
             ($b_new_image_available ?
             ', image="' . $image . '"' :
             '') .
             ', note="' . $_POST['note'] . '"' .
             ' WHERE product_id = ' . $_POST['product_id'];
    }
    mysqli_query($conn, $sql) 
    or die('Could not ' . (isset($_POST['product_id']) ? 
      'update product(' . $_POST['product_id'] . '): ' : 
      'insert product: ') . 
      mysqli_error($conn) . '<br>');
    header("Location: product.php?subcategory_id=" . $_POST['subcategory_id']);
    die(); // Exit program if this is a submit
  }
?>

<?php //////// Direction //////// ?>
<section> 
<h5>
<?php 
  echo '<a href="category.php?">' . '產品管理' . '</a>' . '&gt';
  echo '<a href="subcategory.php?category_id=' . $category_id . '">' . $g_category[$category_id] . '</a>' . ' &gt ';
  echo '<a href="product.php?subcategory_id=' . $subcategory_id . '">' . t_subcategory_item_of_subcategory_id_in_name_zh_tw($conn, $subcategory_id) . '</a>' . ' &gt ';
  echo $name_zh_tw;
?>
</h5>
</section>

<?php //////// Information //////// ?>
<section class="caption">
<h5>請輸入您要<?php echo $action_insert==PDT_OACTION_INSERT ? '新增' : '修改'; ?>的產品資料</h5>
</section>

<?php //////// Product Table //////// ?>
<script language='javascript'>
<!--
 main = new Array();
 sub = new Array();
  
<?php 
  $master_mapping = t_subcategory_array_in_name_zh_tw_subcategory_id_category_id($conn);
  foreach ($g_category as $i => $category) { // iterate category
    echo "main[" . $i . "] = new Array();";
    echo "sub[" . $i . "] = new Array();";
    
    foreach ($master_mapping as $c_id => $mapping) { 
      if($c_id == $i) {
        $j = 0;
        foreach ($mapping as $id => $name) { // iterate subcategory
          echo "main[" . $i . "][" . $j . "] = '" . $name . "';";
          echo "sub[" . $i . "][" . $j . "] = '" . $id . "';";
          $j++;
        }
      }
    }
  }
?>

function getsub(num, si)
  {
   if( si == ""){
   
    document.product_edit.subcategory_id.selectedIndex = 0;
  
   }  
     
   for( ctr = 0; ctr < sub[num].length; ctr++)
   {
    document.product_edit.subcategory_id.options[ctr] = new Option( main[num][ctr], sub[num][ctr]);

    if( sub[num][ctr] == si){
   
     document.product_edit.subcategory_id.options[ctr].selected = true;

    }

   }
   document.product_edit.subcategory_id.length = sub[num].length;
   
  }
-->
</script>
<script type="text/javascript">
function is_number(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}
function check_input() {
  // if(document.product_edit.category_id.value.length===0) return false;
  // if(document.product_edit.subcategory_id.value.length===0) return false;
  // if(document.product_edit.status.value.length===0) return false;
  if(!is_number(document.product_edit.display_order.value)) return false;
  if(document.product_edit.name_zh_tw.value.length===0) return false;
  // if(document.product_edit.name_en.value.length===0) return false;
  // if(document.product_edit.description.value.length===0) return false;
  // if(document.product_edit.image.value.length===0) return false;
  // if(document.product_edit.note.value.length===0) return false;
  
  return true;
}
</script>
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinyMCE.init({
    mode : "specific_textareas",
    editor_selector : "mceEditor",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
<section>
<form enctype="multipart/form-data" name='product_edit' action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' onsubmit="return check_input();">
<table id="table">
<input type='hidden' name='MAX_FILE_SIZE' value='70000' /> 
<input type='hidden' name='action' value="<?php echo $action_insert; ?>" >
<input type='hidden' name='product_id' value="<?php echo $product_id; ?>" >
<tr class="row">
  <th class="header-row cell">所屬主分類</th>
  <td class="cell">
    <select name='category_id' onchange='javascript:getsub(this.selectedIndex, "")'>
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
  <th class="header-row cell">所屬次分類</th>
  <td class="cell">
    <select name='subcategory_id'>
    </select>
  </td>
</tr>
<tr class="row">
  <th class="header-row cell">產品名稱</th>
  <td class="cell">
    <input type='text' name='name_zh_tw' value="<?php echo $name_zh_tw; ?>" size='80' maxlength="250">
  </td>
</tr>
<tr class="row">
  <th class="header-row cell">產品標題</th>
  <td class="cell">
    <input type='text' name='name_en' value="<?php echo $name_en; ?>" size='80' maxlength="250">
  </td>
</tr>
<tr class="row">
  <th class="header-row cell">商品圖示</th>
  <td class="cell">
    <?php
      if(strlen($target_image)>0 && is_file($target_image) && filesize($target_image)>0) {
        echo '<img src="' . PATH_PDT_IMAGE . $image . '" alt="product image" />';
      }
      else {
        echo '<img src="' . PATH_PDT_IMAGE . 'unavailable.png" alt="product image" />';
      }
    ?>
    <input type='file' name='image' id='image' value="<?php echo $image; ?>">
  </td>
</tr>
<tr class="row">
  <th class="header-row cell">顯示次序</th>
  <td class="cell">
    <input type='number' name='display_order' value="<?php echo ($display_order==-1?'0':$display_order); ?>" size='10'>
  </td>
</tr>
<tr class="row">
  <th class="header-row cell">上架狀態</th>
  <td class="cell">
    <select name='status'>
      <option value='1' <?php echo ($status==PDT_STATUS_ACT?' selected':''); ?> >上架</option>
      <option value='0' <?php echo ($status==PDT_STATUS_NONACT?' selected':''); ?> >下架</option>
    </select>
  </td>
</tr>
<tr class="row">
  <th class="header-row cell">商品簡介</th>
  <td class="cell">
    <textarea name="description" id="description" class="mceEditor" style="width:80%"><?php echo $description; ?></textarea>
  </td>
</tr>
<tr class="row">
  <th class="header-row cell">訂購編號</th>
  <td class="cell">
    <textarea name='note' id="note" class="mceEditor" style="width:50%"><?php echo $note; ?></textarea>
  </td>
</tr>
<tr class="row">
  <td class="cell">
    <input type='reset' value='重填'><input type='submit' value='確定' name='submit'>
  </td>
</tr>
</table>
</form>
</section>

<?php //////// Close Database ////////

  mysqli_close($conn);

?>

<?php //////// Footer ////////

  require_once('footer.php');

?>

<script>
getsub(document.product_edit.category_id.selectedIndex, "<?php echo ($subcategory_id==-1 ? '' : $subcategory_id); ?>");
</script>

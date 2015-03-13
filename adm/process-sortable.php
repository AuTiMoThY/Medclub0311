<?php 
/* This is where you would inject your sql into the database 
but we're just going to format it and send it back 
*/
//.sortable('serialize');會將要排序的物件取得id值，並解析為陣列資料。
//變數陣列名為listItem 而id值底線後面的數字變成值，索引為數字索引
foreach ($_GET['listItem'] as $position => $item) : 
  $sql[] = "UPDATE `table` SET `position` = $position WHERE `id` = $item"; 
endforeach; 
print_r ($sql); 
?>

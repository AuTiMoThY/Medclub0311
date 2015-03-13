<?php
  require_once('../global/appvars.php');
  $category_list = "";
  foreach ($g_category as $i => $category) {
    $category_list .= $category;
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="js/jquery/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="js/jquery/jquery-1.10.2.js"></script>
  <script src="js/jquery/ui/1.11.4/jquery-ui.js"></script>


  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>

  <script type="text/javascript"> 
  // When the document is ready set up our sortable with it's inherant function(s) 
  $(function() { 
    $("#sortable").sortable({ 
      handle : '.handle',
      opacity: 0.6,
      cursor: 'move',
      axis:'y',
      update : function () { 
        var order = $('#sortable').sortable('serialize'); 
        $("#info").load("process-sortable.php?"+order); 
      }
    }); 
  }); 
  </script>
</head>
<body>
<?php
  echo($category_list);
?>
<pre> 
    <div id="info">Waiting for update</div> 
</pre> 
<div id="header">
  <p id="add-list-item">Add list item here.</p>
  <ul id="sortable"> 
    <li id="listItem_1" class="ui-state-default">Item 1</li> 
    <li id="listItem_2" class="ui-state-default">  
      <strong>Item 2</strong> 
    </li> 
    <li id="listItem_3" class="ui-state-default">  
      <strong>Item 3</strong> 
    </li> 
    <li id="listItem_4" class="ui-state-default">  
      <strong>Item 4</strong> 
    </li> 
  </ul> 
  <form action="process-sortable.php" method="post" name="sortables"> 
    <input type="hidden" name="test-log" id="test-log"> 
  </form>
  </div>

  <script>
    $( "#add-list-item" )
      .mouseup(function() {
        $("#header ul").append('<li id="listItem_' + ($("#sortable li").size()+1) + '" class="ui-state-default"><strong>Item ' + ($("#sortable li").size()+1) + ' </strong></li> ');
      })
      .mousedown(function() {
      });
  </script>

</body>
</html>

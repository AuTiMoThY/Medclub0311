<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>產品介紹 | 每得科技</title>

<?php
// -------------------------------
// SEO
// CSS
// Script in the HEAD
// -------------------------------
  include_once 'inc/HEAD.php';
 ?>

<?php
//app
  include_once 'inc/Social.php';
 ?>

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.min.js"></script>
<script src="js/product.js"></script>
</head>

<body class="prod_page" ng-app>
<?php
// -------------------------------
// Header
// -------------------------------
  include_once 'inc/Header.php';
 ?>



<div id="pageWrap">

<h1 class="pageTitle pageTitle-prod">
	<div class="wrapper">
		<span class="txt hide_txt">產品專區</span>
	</div>
</h1>


<article id="main" class="prod_page-main">
<div class="wrapper cf">
	<aside id="prodAside" class="leftAside prod-aside">
<?php
// -------------------------------
// prodAside
// -------------------------------
  include_once 'inc/prodAside.php';
 ?>
	</aside>
	<section class="container" ng-controller="prodCateCtrl">
<?php
	$cate = isset($_GET['cate']) ? $_GET['cate'] : null;
	$item = isset($_GET['item']) ? $_GET['item'] : null;

	// print_r($item);
?>
		<div class="prod-cntTop">
			<div class="prod-cntTop-pic ib">
				<div class="pic"><img src="upload/product/{{prodCategory1[<?php echo $item; ?>].img}}.jpg" alt=""></div>
			</div>
			<div class="prod-cntTop-cnt ib">
				<div class="pord-name">
					<span class="en"></span>
					<span class="tw">{{prodCategory1[<?php echo $item; ?>].nameTw}}</span>
				</div>
				<div class="btn btn-prod-golist">
					{{prodCategory1[<?php echo $item; ?>].category}}
					<div class="btn-prod-golist-hover">
						<i class="fa fa-caret-left ib"></i>
						<i class="fa fa-caret-left ib"></i>
						<span class="txt ib"><a href="product<?php echo $cate; ?>.php">回到列表</a></span>
					</div>
				</div>
			</div>
		</div>
		<!-- <div id ="productCnt"></div> -->
		<div id="productCnt" class="prod-cntMain lazyload">
			<!-- 圖文編輯器 -->

			<img data-original="upload/product/{{ prodCategory1[<?php echo $item; ?>].cnt1[0]}}.jpg" alt="" class="temp">
			<img data-original="upload/product/{{ prodCategory1[<?php echo $item; ?>].cnt1[1]}}.jpg" alt="" class="temp">
			
			<!-- <img src="images/temp/tem10.jpg" alt="" class="temp"> -->
		</div>
		<div class="btns new-btns">
			<span class="btn btn-prev"><a href="">上一件商品</a></span>
			<span class="btn btn-goList"><a href="product<?php echo $cate; ?>.php">回到列表</a></span>
			<span class="btn btn-next"><a href="">下一件商品</a></span>
		</div>
	</section>
</div>
</article><!-- /#main  END  !! -->



</div><!-- /#pageWrap  END  !! -->

<?php
// -------------------------------
// Footer
// -------------------------------
  include_once 'inc/Footer.php';
 ?>

<?php
// -------------------------------
// Script in the FOOT
// -------------------------------
  include_once 'inc/ScriptFOOT.php';
 ?>
<script >
$(function() {
	$('#goTop').localScroll();

	$(".prod-subMenu").hide();
	$("#mainMenu1 a").click(function() {
		$("#subMenu1").fadeIn(300);
	});
	$("#mainMenu2 a").click(function() {
		$("#subMenu2").fadeIn(300);
	});
	$("#mainMenu3 a").click(function() {
		$("#subMenu3").fadeIn(300);
	});
	$("#mainMenu4 a").click(function() {
		$("#subMenu4").fadeIn(300);
	});
	$("#mainMenu5 a").click(function() {
		$("#subMenu5").fadeIn(300);
	});

	$("#closeBtn1").click(function() {
		$("#subMenu1").fadeOut(300);
	});
	$("#closeBtn2").click(function() {
		$("#subMenu2").fadeOut(300);
	});
	$("#closeBtn3").click(function() {
		$("#subMenu3").fadeOut(300);
	});
	$("#closeBtn4").click(function() {
		$("#subMenu4").fadeOut(300);
	});
	$("#closeBtn5").click(function() {
		$("#subMenu5").fadeOut(300);
	});


})

</script>
<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once 'inc/ga.php';
 ?>

</body>
</html>

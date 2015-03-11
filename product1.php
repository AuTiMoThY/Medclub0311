<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>產品專區 | 每得科技</title>

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


<article id="main" class="prod_page-main" ng-controller="prodCateCtrl">
<div class="wrapper cf">
	<aside id="prodAside" class="leftAside prod-aside">
<?php
// -------------------------------
// prodAside
// -------------------------------
  include_once 'inc/prodAside.php';
 ?>
	</aside>
	<section class="container lazyload">
		<ul class="cf">
			<li class="prod-item" ng-repeat="prodCategory1 in prodCategory1">
				<figure><a href="{{prodCategory1.link}}" target="{{prodCategory1.target}}">
					<div class="pic"><img data-original="upload/product/{{prodCategory1.img}}.jpg" alt=""></div>
					<figcaption>
						<div class="prod-name">
							<div class="prod-name-en"></div>
							<div class="prod-name-tw">{{$index}}{{prodCategory1.nameTw}}</div>
						</div>
						<div class="btn btn-goProdCnt">
							{{prodCategory1.category}}
							<div class="btn-goProdCnt-hover">
								LEARN MORE
							</div>
						</div>
					</figcaption>
				</a></figure>
			</li>
		</ul>

<!-- 		<div class="pages_btn">
	<ul>
		<li class="prev"><a href=""><i class="icon ib"></i><span class="txt ib">上一頁</span></a></li>在第一頁時不顯示
		<li class="number active"><a href="">1</a></li>
		<li class="number"><a href="">2</a></li>
		<li class="number"><a href="">3</a></li>
		<li class="number"><a href="">4</a></li>
		<li class="number"><a href="">5</a></li>
		<li class="number"><a href="">6</a></li>
		<li class="number"><a href="">7</a></li>
		<li class="number"><a href="">8</a></li>
		<li class="number"><a href="">9</a></li>
		<li class="number"><a href="">10</a></li>
		<li class="next"><a href=""><span class="txt ib">下一頁</span><i class="icon ib"></i></a></li>在最後一頁時不顯示
		<li class="page_select">跳到第
			<select name="" id="">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
			</select>頁
		</li>
	</ul>
</div> -->

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
<script>
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

$(".fancybox").fancybox();


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

<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>最新優惠 | 每得科技</title>

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

</head>

<body class="new_page">
<?php
// -------------------------------
// Header
// -------------------------------
  include_once 'inc/Header.php';
 ?>



<div id="pageWrap">

<h1 class="pageTitle pageTitle-new">
	<div class="wrapper">
		<span class="txt hide_txt">最新優惠</span>
	</div>
</h1>
<!-- banner -->
<section class="banner">
<div class="wrapper">
	<div id="hcarousel" class="h_carousel clearfix">
		<div class="flexslider carousel">
			<ul class="slides">
				<li style="background-image: url('images/banner_new1.jpg');" class=""></li>
			</ul>
		</div><!-- /.flexslider carousel  END  !! -->
	</div>
</div>
</section><!-- banner  END  !! -->

<article id="main" class="newCnt_page-main">
<div class="wrapper cf">
	<section class="container new-container">
		<h1>最新優惠標題文字</h1>
		<div class="new-cnt">
			<!-- 圖文編輯器 -->
			<img src="images/temp/tem7.jpg" alt="" class="temp">
		</div>
	</section>
	<div class="btns new-btns">
		<span class="btn btn-prev"><a href="">上一則優惠</a></span>
		<span class="btn btn-goList"><a href="new.php">回到優惠列表</a></span>
		<span class="btn btn-next"><a href="">下一則優惠</a></span>
	</div>
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
$(window).load(function(){
	$('.flexslider').flexslider({
		animation: "slide",
		easing: "swing",
        animationLoop: true,
        minItems:1,
        maxItems:1,
        // controlsContainer: $('#hcarouselcontrols .well'),
        controlNav: false,
        directionNav: false,
        prevText: "",
        nextText: ""
		// start: function(slider){
		// 	$('body').removeClass('loading');
		// }
	});
});
</script>
<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once 'inc/ga.php';
 ?>

</body>
</html>

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
				<li style="background-image: url('images/banner_new1.jpg');" class="">
					<a href="javascript:void 0;" class="slidelink"></a>
					<div class="well">
						<div class="flex-caption">
							<h1>10:00AM 下單, 25nmole引子三天到貨</h1>
						</div>
					</div>
				</li>
				<li style="background-image: url('images/banner_new2.jpg');" class="">
					<a href="javascript:void 0;" class="slidelink"></a>
					<div class="well">
						<div class="flex-caption">
							<h1>2014 每得科技綜合型錄</h1>
						</div>
					</div>
				</li>
				<li style="background-image: url('images/banner_new1.jpg');" class="">
					<a href="javascript:void 0;" class="slidelink"></a>
					<div class="well">
						<div class="flex-caption">
							<h1>[特價組合] Purist 水機 + 4TI 4S2 電動半自動封盤機</h1>
						</div>
					</div>
				</li>
			</ul>
			<div id="hcarouselcontrols" class="h_carousel_controls">
				<div class="well">
					<!--  實際由JS產生
					<ol class="flex-control-nav flex-control-paging"></ol> 
					<ul class="flex-direction-nav">
						<li><a class="flex-prev" href="#">Previous</a></li>
						<li><a class="flex-next" href="#">Next</a></li>
					</ul>
					-->
				</div>
			</div>
		</div><!-- /.flexslider carousel  END  !! -->
	</div>
</div>
</section><!-- banner  END  !! -->

<article id="main" class="new_page-main">
<div class="wrapper cf">
	<section class="container">
		<ul class="new-list cf">
			<li class="new-item col">
				<figure><a href="newCnt.php">
					<div class="pic"><img src="images/banner_new1.jpg" alt=""></div>
					<figcaption>
						2014 每得科技綜合型錄
					</figcaption>
				</a></figure>
			</li>
			<li class="new-item col">
				<figure><a href="newCnt.php">
					<div class="pic"><img src="images/temp/tem5.jpg" alt=""></div>
					<figcaption>
						2014 每得科技綜合型錄
					</figcaption>
				</a></figure>
			</li>
			<li class="new-item col">
				<figure><a href="newCnt.php">
					<div class="pic"><img src="images/banner_new1.jpg" alt=""></div>
					<figcaption>
						2014 每得科技綜合型錄
					</figcaption>
				</a></figure>
			</li>
			<li class="new-item col">
				<figure><a href="newCnt.php">
					<div class="pic"><img src="images/temp/tem6.jpg" alt=""></div>
					<figcaption>
						2014 每得科技綜合型錄
					</figcaption>
				</a></figure>
			</li>
		</ul>
	</section>

	<div class="pages_btn">
		<ul>
			<li class="prev"><a href=""><i class="icon ib"></i><span class="txt ib">上一頁</span></a></li><!-- 在第一頁時不顯示 -->
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
			<li class="next"><a href=""><span class="txt ib">下一頁</span><i class="icon ib"></i></a></li><!-- 在最後一頁時不顯示 -->
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
        maxItems:5,
        controlsContainer: $('#hcarouselcontrols .well'),
        controlNav: false,
        directionNav: true,
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

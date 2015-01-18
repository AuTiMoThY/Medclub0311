<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>首頁 | 每得科技</title>

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

<body class="index_page">
<?php
// -------------------------------
// Header
// -------------------------------
  include_once 'inc/Header.php';
 ?>



<div id="pageWrap">

<!-- banner -->
<section class="banner">
<div class="wrapper">
	<div id="hcarousel" class="h_carousel clearfix">
		<div class="flexslider carousel">
			<ul class="slides">
				<li style="background-image: url('images/banner1.jpg');" class="">
					<a href="javascript:void 0;" class="slidelink"></a></li>
				<li style="background-image: url('images/banner1.jpg');" class="">
					<a href="javascript:void 0;" class="slidelink"></a>
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

<article id="main" class="index_page-main">
<div class="wrapper cf">
	<aside class="news-wrap col left">
		<h1 class="hide_txt">最新消息 NEWS</h1>
		<div class="pic"><img src="images/pic1.jpg" alt=""></div>
		<section class="news-container">
			<hgroup>
				<h2 class="news-title">
			<?php  //此處示意顯示 最新消息標題 16 個字，超過以...取代
				$cnt0 = "最新消息的標題/這邊可以寫標題文最新消息的標題/這邊可以寫標題文";
				$content0 = strip_tags($cnt0);
				$content = mb_substr($content0,0,16,'UTF-8');
				if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
				echo $content;
			?>
				</h2>
				<div class="news-time">12 月 27日</div>
			</hgroup>
			<div class="news-cnt">
			<?php  //此處示意顯示 最新消息內容 75 個字，超過以...取代
				$cnt0 = "最新消息的內容，這邊可以彈出最新的資訊，資訊以文字內容為主，可以輪撥三則或五則，上下鍵可以快選最新訊息的瀏覽三則或五則，最新消息的內容，這邊可以彈出最新消息的內容，這邊可以彈出最新的資訊，資訊以文字內容為主，可以輪撥三則或五則，上下鍵可以快選最新訊息的瀏覽三則或五則，最新消息的內容，這邊可以彈出";
				$content0 = strip_tags($cnt0);
				$content = mb_substr($content0,0,75,'UTF-8');
				if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
				echo $content;
			?>
			</div>
			<span class="btn btn-more"><a href="<?php webPageUrlAu('webPageBuild') ?>">READ MORE &gt;&gt;</a></span>
		</section>
	</aside>
	<section class="container col left">
		<h1 class="hide_txt">熱門產品 POPULAR PRODUCTS</h1>
		<img src="images/temp/tem1.jpg" alt="" class="temp">
	</section>
</div>
</article><!-- /#main  END  !! -->

<section class="row-3">
	<div class="wrapper">
		<a href="<?php webPageUrlAu('webPageBuild') ?>" class="online_ordering"><img src="images/online_ordering.jpg" alt=""></a>
	</div>
</section>

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

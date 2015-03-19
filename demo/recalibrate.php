<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>校正服務 | 每得科技</title>

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

<body class="recalibrate_page">
<?php
// -------------------------------
// Header
// -------------------------------
	include_once 'inc/Header.php';
 ?>



<div id="pageWrap">

<div class="slogan">
	<div class="wrapper">
		<span class="hide_txt">工欲善其事，必先利其器</span>
	</div>
</div>

<h1 class="pageTitle pageTitle-reca">
	<div class="wrapper">
		<span class="txt hide_txt">校正服務</span>
	</div>
</h1>


<article id="main" class="new_page-main">
<div class="wrapper cf">
	<section class="container">
		<img src="images/temp/tem4.jpg" alt="" class="temp">
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

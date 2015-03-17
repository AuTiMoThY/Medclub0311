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
			<ul id="newsBanner" class="slides">
				<!-- <li style="background-image: url('images/banner2.jpg');" class=""></li> -->
			</ul>
		</div><!-- /.flexslider carousel  END  !! -->
	</div>
</div>
</section><!-- banner  END  !! -->

<article id="main" class="newCnt_page-main">
<div class="wrapper cf">
	<section class="container containerEditer new-container">
	<?php
	$dm = $_GET['dm'];
	// print_r($dm);
	?>
		<h1 id="newsTitle"></h1>
		<div id="newsCnt" class="new-cnt">
			<!-- 圖文編輯器 -->
			<!-- <img src="images/temp/tem7.jpg" alt="" class="temp"> -->
			
		</div>
	</section>
	<div class="btns new-btns">
		<?php
			if ($dm=11) {
		?>
		<span class="btn btn-prev"><a href="newCnt.php">上一則優惠</a></span>
		<?php
			}else {
		?>
		<span class="btn btn-prev"><a href="newCnt1.php?dm=<?php echo $dm+1 ?>">上一則優惠</a></span>
		<?php } ?>
		<span class="btn btn-goList"><a href="new.php">回到優惠列表</a></span>
		<?php 
			if (!($dm<=1)) {
		?>
		<span class="btn btn-next"><a href="newCnt1.php?dm=<?php echo $dm-1 ?>">下一則優惠</a></span>
		<?php
			}
		?>
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

$(function(){
	var json,
		pagerCount = 10,
		currentIndex = 1,
		dmphp = <?php echo $dm ?>,
		dmIndex = 12 - dmphp;

	function show(data) {
		var html = "";
		var banner = "";
		var newsTitle = "";
		// var hash = location.hash.substr(1);
		// var hashA = hash - 1;
		var cntImg = data[dmIndex].cntImg;
		// console.log (data.length);
		// console.log ("hash:" + hash + ",hashA:" + hashA);
        // if (hash != "") {
			// console.log (prodImg.length);
banner += "<li style=\"background-image: url('" + data[dmIndex].imgUrl + "');\" class=\"\"></li>";
newsTitle += data[dmIndex].newsTitle;
			for (var i = 0; i < cntImg.length; i++) {
html += "<img src=\"upload/news/" + data[dmIndex].cntImg[i] + ".jpg\" alt=\"\" class=\"temp\">";
			};
			$("#newsBanner").html(banner);
			$("#newsTitle").html(newsTitle);
			$("#newsCnt").html(html);
        // }
	}
	$.getJSON('ajax/newsDM.json', function(data) {
		json = data;
		show(json);
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

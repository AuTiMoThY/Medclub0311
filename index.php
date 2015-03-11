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
				<li style="background-image: url('images/banner2.jpg');" class="">
					<a href="javascript:void 0;" class="slidelink"></a></li>
				<!-- <li style="background-image: url('images/banner1.jpg');" class="">
					<a href="javascript:void 0;" class="slidelink"></a>
				</li> -->
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
				$cnt0 = "第30 屆生物醫學聯合學術年會";
				$content0 = strip_tags($cnt0);
				$content = mb_substr($content0,0,16,'UTF-8');
				if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
				echo $content;
			?>
				</h2>
				<div class="news-time">3 月 12日</div>
			</hgroup>
			<div class="news-cnt">
			<?php  //此處示意顯示 最新消息內容 75 個字，超過以...取代
				$cnt0 = "現場備有贈獎活動,觀迎蒞臨指教";
				$content0 = strip_tags($cnt0);
				$content = mb_substr($content0,0,75,'UTF-8');
				if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
				echo $content;
			?>
			</div>
			<span class="btn btn-more"><a href="newCnt.php">READ MORE &gt;&gt;</a></span>
		</section>
	</aside>
	<section class="container col left">
		<h1 class="hide_txt">熱門產品 POPULAR PRODUCTS</h1>
		<div class="popular_prod">
			<div class="popular_prod-wrap">
				<figure class="col">
					<div class="popular_prod-pic">
						<div class="pic"><img src="images/prod5.jpg" alt=""></div>
					</div>
					<figcaption>
						<h2 class="popular_prod-title">
							新產品名字新產品名字新產品名字新產品名字新產品名字新產品名字
						</h2>
						<div class="popular_prod-cnt">
						<?php  //此處示意顯示 最新消息內容 65 個字，超過以...取代
							$cnt0 = "最新消息的內容，這邊可以彈出最新的資訊，資訊以文字內容為主，可以輪撥三則或五則，上下鍵可以快選最新訊息的瀏覽三則或五則，可以輪撥三則。最新消息的內容，這邊可以彈出最新的資訊，資訊以文字內容為主，可以輪撥三則或五則，上下鍵可以快選最新訊息的瀏覽三則或五則，可以輪撥三則。";
							$content0 = strip_tags($cnt0);
							$content = mb_substr($content0,0,65,'UTF-8');
							if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
							echo $content;
						?>
						</div>
						<span class="btn btn-more"><a href="productCnt.php">LEARN MORE &gt;&gt;</a></span>
					</figcaption>
				</figure>
<div class="popular_prod-mq col cf">
     <div class="marquee-control">
          <ul id="marqueeCtrl" class="marquee-control-btn">
               <li><div id="marquee_prev_btn" class="prev_btn marquee_btn"><i class="fa fa-caret-up fa-fw fa-lg"></i></div></li>
               <li><div id="marquee_next_btn" class="next_btn marquee_btn"><i class="fa fa-caret-down fa-fw fa-lg"></i></div></li>
          </ul>
     </div>
     <div id="popularProdMarquee" class="marquee">
          <ul class="popular_prod-list">
          		<!-- 顯示此產品內容時，加入 class： active -->
               <li class="popular_prod-item active">
                    <div class="popular_prod-item-pic">
                    	<div class="pic"><img src="images/prod5.jpg" alt=""></div>
                    </div>
               </li>

               <li class="popular_prod-item">
                    <div class="popular_prod-item-pic">
                    	<div class="pic"><img src="images/prod5.jpg" alt=""></div>
                    </div>
               </li>

               <li class="popular_prod-item">
                    <div class="popular_prod-item-pic">
                    	<div class="pic"><img src="images/prod3.jpg" alt=""></div>
                    </div>
               </li>

               <li class="popular_prod-item">
                    <div class="popular_prod-item-pic">
                    	<div class="pic"><img src="images/prod5.jpg" alt=""></div>
                    </div>
               </li>

               <li class="popular_prod-item">
                    <div class="popular_prod-item-pic">
                    	<div class="pic"><img src="images/prod3.jpg" alt=""></div>
                    </div>
               </li>


          </ul>
     </div>
</div>
			</div>
		</div>
	</section>
</div>
</article><!-- /#main  END  !! -->

<section class="row-3">
	<div class="wrapper">
		<a href="http://sg.idtdna.com/site" class="online_ordering" target="_blank"><img src="images/online_ordering.jpg" alt=""></a>
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

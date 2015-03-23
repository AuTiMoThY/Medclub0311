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
				// $cnt0 = "第30 屆生物醫學聯合學術年會";
				// $content0 = strip_tags($cnt0);
				// $content = mb_substr($content0,0,16,'UTF-8');
				// if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
				// echo $content;
			?>
				</h2>
				<!-- <div class="news-time">3 月 12日</div> -->
			</hgroup>
			<div class="news-cnt">
			<?php  //此處示意顯示 最新消息內容 75 個字，超過以...取代
				// $cnt0 = "現場備有贈獎活動,觀迎蒞臨指教";
				// $content0 = strip_tags($cnt0);
				// $content = mb_substr($content0,0,75,'UTF-8');
				// if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
				// echo $content;
			?>
			</div>
			<span class="btn btn-more"><a href="new.php">READ MORE &gt;&gt;</a></span>
		</section>
	</aside>
	<section class="container col left">
		<h1 class="hide_txt">熱門產品 POPULAR PRODUCTS</h1>
		<div class="popular_prod">
			<div class="popular_prod-wrap">
				<figure id="popularProd1" class="col">
					<div class="popular_prod-pic">
						<div class="pic"><img src="upload/product/category1/20150317001.jpg" alt=""></div>
					</div>
					<figcaption>
						<h2 class="popular_prod-title">
							96孔溫度梯度聚合酶連鎖反應儀
						</h2>
						<div class="popular_prod-cnt">
						<?php  //此處示意顯示 最新消息內容 65 個字，超過以...取代
							$cnt0 = "96孔溫度梯度聚合酶連鎖反應儀。全系列採用8枚美製Marlow半導體製冷片，最大升降溫速率大於5度每秒，循環次數大於60萬次。";
							$content0 = strip_tags($cnt0);
							$content = mb_substr($content0,0,65,'UTF-8');
							if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
							echo $content;
						?>
						</div>
						<span class="btn btn-more"><a href="productCnt.php?cate=1&item=39">LEARN MORE &gt;&gt;</a></span>
					</figcaption>
				</figure>
				<figure id="popularProd2" class="col">
					<div class="popular_prod-pic">
						<div class="pic"><img src="upload/product/category1/20150317002.jpg" alt=""></div>
					</div>
					<figcaption>
						<h2 class="popular_prod-title">
							Homogenizer 生物樣品均質機 
						</h2>
						<div class="popular_prod-cnt">
						<?php  //此處示意顯示 最新消息內容 65 個字，超過以...取代
							$cnt0 = "Prep-CB24 Homogenizer 生物樣品均質機。最快30秒就能處理24支生物樣品! 歡迎預約試用!";
							$content0 = strip_tags($cnt0);
							$content = mb_substr($content0,0,65,'UTF-8');
							if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
							echo $content;
						?>
						</div>
						<span class="btn btn-more"><a href="productCnt.php?cate=1&item=40">LEARN MORE &gt;&gt;</a></span>
					</figcaption>
				</figure>
				<figure id="popularProd3" class="col">
					<div class="popular_prod-pic">
						<div class="pic"><img src="upload/product/category1/20150317003.jpg" alt=""></div>
					</div>
					<figcaption>
						<h2 class="popular_prod-title">
							Nano100 / Nano200 分光光度計
						</h2>
						<div class="popular_prod-cnt">
						<?php  //此處示意顯示 最新消息內容 65 個字，超過以...取代
							$cnt0 = "分光光度計系列產品：Nano-200 分光光度計、Nano-100 分光光度計、全波長微量 / 比色管分光光度計 DS-11+";
							$content0 = strip_tags($cnt0);
							$content = mb_substr($content0,0,65,'UTF-8');
							if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
							echo $content;
						?>
						</div>
						<span class="btn btn-more"><a href="productCnt.php?cate=1&item=41">LEARN MORE &gt;&gt;</a></span>
					</figcaption>
				</figure>
				<figure id="popularProd4" class="col">
					<div class="popular_prod-pic">
						<div class="pic"><img src="upload/product/category1/20150317004.jpg" alt=""></div>
					</div>
					<figcaption>
						<h2 class="popular_prod-title">
							Rephile Direct-Pure UP UV 二合一超純水系統
						</h2>
						<div class="popular_prod-cnt">
						<?php  //此處示意顯示 最新消息內容 65 個字，超過以...取代
							$cnt0 = "Direct-Pure UP UV 二合一超純水系統。  以自來水為進水，製備超純水和逆滲透純水的二合一系統。採用最先進逆滲透技術和獨創配方填料的超純化濾柱，Direct-Pure UP UV超純水及逆滲透RO純水組合型一體機，";
							$content0 = strip_tags($cnt0);
							$content = mb_substr($content0,0,65,'UTF-8');
							if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
							echo $content;
						?>
						</div>
						<span class="btn btn-more"><a href="productCnt.php?cate=1&item=42">LEARN MORE &gt;&gt;</a></span>
					</figcaption>
				</figure>
				<figure id="popularProd5" class="col">
					<div class="popular_prod-pic">
						<div class="pic"><img src="upload/product/category1/20150317005.jpg" alt=""></div>
					</div>
					<figcaption>
						<h2 class="popular_prod-title">
							Rephile Direct-Pure adept UV 超純水系統
						</h2>
						<div class="popular_prod-cnt">
						<?php  //此處示意顯示 最新消息內容 65 個字，超過以...取代
							$cnt0 = "Direct-Pure adept UV 超純水系統。  無水箱超純水一體機，以自來水為進水，直接製備18.2MΩ.cm 超純水。小體積專業集成設計的無水箱型Direct-Pure adept超純水系統，無需其他配備和特殊安裝，即可以從自來水製備超純水，";
							$content0 = strip_tags($cnt0);
							$content = mb_substr($content0,0,65,'UTF-8');
							if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
							echo $content;
						?>
						</div>
						<span class="btn btn-more"><a href="productCnt.php?cate=1&item=43">LEARN MORE &gt;&gt;</a></span>
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
               <li id="popularProdItem1" class="popular_prod-item active">
                    <div class="popular_prod-item-pic">
                    	<div class="pic"><img src="upload/product/category1/20150317001.jpg" alt=""></div>
                    </div>
               </li>

               <li id="popularProdItem2" class="popular_prod-item">
                    <div class="popular_prod-item-pic">
                    	<div class="pic"><img src="upload/product/category1/20150317002.jpg" alt=""></div>
                    </div>
               </li>

               <li id="popularProdItem3" class="popular_prod-item">
                    <div class="popular_prod-item-pic">
                    	<div class="pic"><img src="upload/product/category1/20150317003.jpg" alt=""></div>
                    </div>
               </li>

               <li id="popularProdItem4" class="popular_prod-item">
                    <div class="popular_prod-item-pic">
                    	<div class="pic"><img src="upload/product/category1/20150317004.jpg" alt=""></div>
                    </div>
               </li>

               <li id="popularProdItem5" class="popular_prod-item">
                    <div class="popular_prod-item-pic">
                    	<div class="pic"><img src="upload/product/category1/20150317005.jpg" alt=""></div>
                    </div>
               </li>


          </ul>
     </div>
</div><!-- /.popular_prod-mq  END  !! -->
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

$(function() {
	var dis = $('.popular_prod-item').outerHeight();
	$("#popularProdMarquee").scrollbox({
		// distance: dis,
		speed: 60
	})
	$('#marquee_prev_btn').click(function () {
		$('#popularProdMarquee').trigger('backward');
	});
	$('#marquee_next_btn').click(function () {
		$('#popularProdMarquee').trigger('forward');
	});

	function isActive ($this) {
		// $this.click(function() {
			// var $this = $(this);
			if ($this.hasClass('active')) {
				$this.removeClass('active');
			} else{
				$(".popular_prod-item.active").removeClass('active');
				$this.addClass('active');
			};
		// });
	}

	var ppm1 = $("#popularProdItem1"),
		ppm2 = $("#popularProdItem2"),
		ppm3 = $("#popularProdItem3"),
		ppm4 = $("#popularProdItem4"),
		ppm5 = $("#popularProdItem5"),
		ppc1 = $("#popularProd1"),
		ppc2 = $("#popularProd2"),
		ppc3 = $("#popularProd3"),
		ppc4 = $("#popularProd4"),
		ppc5 = $("#popularProd5");

	ppc1.show();
	ppc2.hide();
	ppc3.hide();
	ppc4.hide();
	ppc5.hide();

	ppm1.click(function() {
		isActive(ppm1);
		ppc1.show();
		ppc2.hide();
		ppc3.hide();
		ppc4.hide();
		ppc5.hide();
	});
	ppm2.click(function() {
		isActive(ppm2);
		ppc1.hide();
		ppc2.show();
		ppc3.hide();
		ppc4.hide();
		ppc5.hide();
	});
	ppm3.click(function() {
		isActive(ppm3);
		ppc1.hide();
		ppc2.hide();
		ppc3.show();
		ppc4.hide();
		ppc5.hide();
	});
	ppm4.click(function() {
		isActive(ppm4);
		ppc1.hide();
		ppc2.hide();
		ppc3.hide();
		ppc4.show();
		ppc5.hide();
	});
	ppm5.click(function() {
		isActive(ppm5);
		ppc1.hide();
		ppc2.hide();
		ppc3.hide();
		ppc4.hide();
		ppc5.show();
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

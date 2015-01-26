<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>積點兌換 | 每得科技</title>

<?php
// -------------------------------
// SEO
// CSS
// Script in the HEAD
// -------------------------------
	include_once 'inc/HEAD.php';
 ?>
<link rel="stylesheet" type="text/css" href="css/component.css" />
<?php
//app
	include_once 'inc/Social.php';
 ?>

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body class="point_page">
<?php
// -------------------------------
// Header
// -------------------------------
	include_once 'inc/Header.php';
 ?>



<div id="pageWrap">

<div class="slogan">
	<div class="wrapper">
		<span class="hide_txt">積點兌換</span>
	</div>
</div>

<!-- <h1 class="pageTitle pageTitle-point">
	<div class="wrapper">
		<span class="txt hide_txt">積點兌換</span>
	</div>
</h1> -->


<article id="main" class="point_page-main">
<div class="wrapper cf">
	<div class="form-pointSearch">
		<form action="">
			<ul>
				<li>
					<input type="text" name="" id="" class="inp-point ib">
					<span class="btn btn-point ib">
						<button type="submit" name="" id="" class="">點數查詢</button>
					</span>
				</li>
				<li>
					<span class="txt">請輸入您的客戶編號。</span>
				</li>
			</ul>
		</form>
	</div>
	<!-- 查詢到結果時顯示以下div ↓↓↓ -->
	<div class="form-pointSearch" style="display:none;">
		<form action="">
			<ul>
				<li>
					<span class="txt txt-ans">累積點數尚餘 <strong>2567</strong> 點</span>
				</li>
				<li>
					<span class="txt">有效期限至 2014/12/31 止。</span>
				</li>
			</ul>
		</form>
	</div>
	<!-- 查詢到結果時顯示 ↑↑↑ -->

	<div class="point-container">
		<ul>
			<li>
				<div class="point-block">
					<div class="pic"><img src="images/prod1.jpg" alt=""></div>
					<section class="point-hover">
						<div class="prod-name">
							<span class="tw">低溫/高溫乾浴器 </span>
							<span class="pid">CB-1502</span>
						</div>
						<div class="price">
							售價：$ 28,000
						</div>
						<div class="point-user">
							<strong>25000</strong> 點
						</div>
						<span class="btn btn-exchange">
							<button>EXCHANGE &gt;</button>
						</span>
					</section>
				</div>
			</li>
			<li>
				<div class="point-block">
					<div class="pic"><img src="images/prod1.jpg" alt=""></div>
					<section class="point-hover">
						<div class="prod-name">
							<span class="tw">低溫/高溫乾浴器 </span>
							<span class="pid">CB-1502</span>
						</div>
						<div class="price">
							售價：$ 28,000
						</div>
						<div class="point-user">
							<strong>25000</strong> 點
						</div>
						<span class="btn btn-exchange">
							<button>EXCHANGE &gt;</button>
						</span>
					</section>
				</div>
			</li>
			<li>
				<div class="point-block">
					<div class="pic"><img src="images/prod1.jpg" alt=""></div>
					<section class="point-hover">
						<div class="prod-name">
							<span class="tw">低溫/高溫乾浴器 </span>
							<span class="pid">CB-1502</span>
						</div>
						<div class="price">
							售價：$ 28,000
						</div>
						<div class="point-user">
							<strong>25000</strong> 點
						</div>
						<span class="btn btn-exchange">
							<button>EXCHANGE &gt;</button>
						</span>
					</section>
				</div>
			</li>
			<li>
				<div class="point-block">
					<div class="pic"><img src="images/prod1.jpg" alt=""></div>
					<section class="point-hover">
						<div class="prod-name">
							<span class="tw">低溫/高溫乾浴器 </span>
							<span class="pid">CB-1502</span>
						</div>
						<div class="price">
							售價：$ 28,000
						</div>
						<div class="point-user">
							<strong>25000</strong> 點
						</div>
						<span class="btn btn-exchange">
							<button>EXCHANGE &gt;</button>
						</span>
					</section>
				</div>
			</li>
			<li>
				<div class="point-block">
					<div class="pic"><img src="images/prod1.jpg" alt=""></div>
					<section class="point-hover">
						<div class="prod-name">
							<span class="tw">低溫/高溫乾浴器 </span>
							<span class="pid">CB-1502</span>
						</div>
						<div class="price">
							售價：$ 28,000
						</div>
						<div class="point-user">
							<strong>25000</strong> 點
						</div>
						<span class="btn btn-exchange">
							<button>EXCHANGE &gt;</button>
						</span>
					</section>
				</div>
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
<script src="js/classie.js"></script>
<script>
	(function() {
		// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
		if (!String.prototype.trim) {
			(function() {
				// Make sure we trim BOM and NBSP
				var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
				String.prototype.trim = function() {
					return this.replace(rtrim, '');
				};
			})();
		}

		[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
			// in case the input is already filled..
			if( inputEl.value.trim() !== '' ) {
				classie.add( inputEl.parentNode, 'input--filled' );
			}

			// events:
			inputEl.addEventListener( 'focus', onInputFocus );
			inputEl.addEventListener( 'blur', onInputBlur );
		} );

		function onInputFocus( ev ) {
			classie.add( ev.target.parentNode, 'input--filled' );
		}

		function onInputBlur( ev ) {
			if( ev.target.value.trim() === '' ) {
				classie.remove( ev.target.parentNode, 'input--filled' );
			}
		}
	})();
</script>

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

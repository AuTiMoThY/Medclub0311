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

<div id="blackQQ" class="blackQQ"></div>
<div id="exchangeBlock" class="exchange_block">
	<div class="exchange_block-form">
		<form action="" id="">
			<ul>
				<li>
					<label for="" class="title ib">客戶編號</label>
					<input type="text" name="" id="" class="ib">
				</li>
				<li>
					<label for="" class="title ib">兌換數量</label>
					<input type="text" name="" id="" class="ib">
				</li>
				<li class="btns">
					<label for="" class="empty ib"></label>
					<span class="btn btn-change_confirm ib">
						<button type="button" onclick="javascript:alert('已兌換')">確認送出 / CONFIRM</button>
					</span>
					<span class="btn btn-change_undo ib">
						<button type="button" onclick="" id="exchangeBlockClose">取消 / UNDO</button>
					</span>
				</li>
			</ul>
		</form>
	</div>
</div>


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
	<!-- <div class="form-pointSearch" style="display:none;"> -->
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
	<div class="form-pointSearch">
		<form action="">
			<ul>
				<li>
					<span class="txt txt-ans">
						累積點數尚餘 <strong>2567</strong> 點
						<span class="btn btn-point q ib">
							<button type="submit" name="" id="" class="">重新查詢</button>
						</span>
					</span>
				</li>
				<li>
					<span class="txt">有效期限至 2014/12/31 止。</span>
				</li>
			</ul>
		</form>
	</div>
	<!-- 查詢到結果時顯示 ↑↑↑ -->

	<div class="point-container">
		<ul class="cf">
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
							<button class="exchangeBlockOpen">EXCHANGE &gt;</button>
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
							<button class="exchangeBlockOpen">EXCHANGE &gt;</button>
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
							<button class="exchangeBlockOpen">EXCHANGE &gt;</button>
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
							<button class="exchangeBlockOpen">EXCHANGE &gt;</button>
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
							<button class="exchangeBlockOpen">EXCHANGE &gt;</button>
						</span>
					</section>
				</div>
			</li>
		</ul>
	</div>

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
</div><!-- /.pages_btn  END  !! -->

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

</script>
<?php
// -------------------------------
// google analytics
// -------------------------------
	include_once 'inc/ga.php';
 ?>

</body>
</html>

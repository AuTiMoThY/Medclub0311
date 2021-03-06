<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>會員登入 | 每得科技</title>

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

<body class="login_page">
<?php
// -------------------------------
// Header
// -------------------------------
	include_once 'inc/Header.php';
 ?>



<div id="pageWrap">

<h1 class="pageTitle pageTitle-login">
	<div class="wrapper">
		<span class="txt hide_txt">會員登入</span>
	</div>
</h1>


<article id="main" class="login_page-main">
<div class="wrapper cf">
	<section class="col login_page-login">
		<h1 class="hide_txt">現有帳號</h1>
		<form action="">
			<ul>
				<li>
					<label for="">帳號</label><input type="text" name="" id="">
				</li>
				<li>
					<label for="">密碼</label><input type="password" name="" id="">
				</li>
				<li>
					<label for="" class="empty"></label><span>忘記密碼嗎?>><a href="m_forgot.php">重設密碼</a></span>
				</li>
				<li class="btns">
					<span class="btn btn-loginInp"><button type="submit">登入 / LOGIN</button></span>
				</li>
			</ul>
		</form>
	</section>
	<section class="col login_page-register">
		<h1 class="hide_txt">創立新帳號</h1>
		<form action="goMember.php">
			<ul>
				<li>
					<label for="">名字</label><input type="text" name="" id="">
				</li>
				<li>
					<label for="">帳號</label><input type="text" name="" id="" placeholder ="請輸入你的帳號">
				</li>
				<li>
					<label for="">密碼</label><input type="password" name="" id="" placeholder ="六個字以上分大小寫">
				</li>
				<li>
					<label for="" class="empty"></label><input type="password" name="" id="" placeholder ="再輸入一次密碼">
				</li>
				<li>
					<!-- <label for="" class="empty"></label> -->
					<input type="checkbox" name="" id="epaper">
					<label for="epaper" class="epaper">訂閱MEDCLUB電子報収到最新優惠訊息</label>
				</li>
				<li class="btns">
					<span class="btn btn-loginInp">
						<button type="submit" onclick="javascript:location.href='member.php'">確認送出 / CONFIRM</button>
					</span>
				</li>
			</ul>
		</form>
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

<?php
// -------------------------------
// google analytics
// -------------------------------
	include_once 'inc/ga.php';
 ?>

</body>
</html>

<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>會員中心 | 每得科技</title>

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

<body class="member_page">
<?php
// -------------------------------
// Header
// -------------------------------
	include_once 'inc/Header.php';
 ?>



<div id="pageWrap">

<h1 class="pageTitle pageTitle-member">
	<div class="wrapper">
		<span class="txt hide_txt">會員中心</span>
	</div>
</h1>


<article id="main" class="member_page-main">
	<div class="wrapper cf">
		<section class="member-block cf">
			<h2 class="hide_txt">會員資料</h2>
			<div class="member-form form1 left">
				<form action="" id="changePwForm">
					<ul>
						<li>
							<label for="" class="title ib">帳號</label>
							<span class="txt ib">googlegoogle@gmail.com</span>
						</li>
						<li>
							<label for="" class="title ib">舊密碼</label>
							<input type="password" name="" id="" class="ib validate[required]">
						</li>
						<li>
							<label for="" class="title ib">新密碼</label>
							<input type="password" name="" id="" class="ib validate[required]" placeholder ="六個以上英數，分大小寫">
						</li>
						<li>
							<label for="" class="empty ib"></label>
							<input type="text" name="" id="" class="ib validate[required]" placeholder ="再輸入一次密碼">
						</li>
						<li class="bnts">
							<label for="" class="empty ib"></label>
							<span class="btn btn-change_pw ib"><button type="submit">修改密碼 / SAVE CHANGE</button></span>
						</li>
					</ul>
				</form>
			</div>
			<div class="member-form form2 left">
				<form action="" id="changeDataForm">
					<ul>
						<li>
							<label for="" class="title ib">客戶名稱</label>
							<input type="text" name="" id="" class="ib">
						</li>
						<li>
							<label for="" class="title ib">連絡電話</label>
							<input type="text" name="" id="" class="ib">
						</li>
						<li>
							<label for="" class="title ib">連絡傳真</label>
							<input type="text" name="" id="" class="ib">
						</li>
						<li>
							<label for="" class="title ib">單位名稱</label>
							<input type="text" name="" id="" class="ib">
						</li>
						<li>
							<label for="" class="title ib">電子信箱</label>
							<input type="text" name="" id="" class="ib">
						</li>
						<li>
							<label for="" class="title ib">連絡地址</label>
							<textarea type="text" name="" id="" class="ib"></textarea>

						</li>
						<li>
							<label for="" class="title ib">狀態</label>
							<input type="text" name="" id="" class="ib">
						</li>
						<li class="assess">
							<label for="" class="empty ib"></label>
							<input type="checkbox" name="" id="epaper" class="ib">
							<label for="epaper" class="txt ib">訂閱MEDCLUB電子報収到最新優惠訊息</label>
						</li>
						<li class="btns">
							<label for="" class="empty ib"></label>
							<span class="btn btn-change_confirm ib"><button type="submit">確認修改 / CONFIRM</button></span>
							<span class="btn btn-change_undo ib"><button type="reset">重填 / UNDO</button></span>
						</li>
					</ul>
				</form>
			</div>
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
<script src="asset/valid/jquery.validationEngine.js"></script>
<script src="asset/valid/jquery.validationEngine-zh_TW.js"></script>
<script>
$(function () {
	$("#changePwForm").validationEngine('attach', {promptPosition : "topRight", scroll: true});
	$("#changeDataForm").validationEngine('attach', {promptPosition : "topRight", scroll: true});
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

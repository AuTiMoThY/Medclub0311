<?php 
require_once 'inc/auNAV.php';
 ?>
<div id="top"></div>
<header class="global_hd">
	<section class="header-hd">
	<div class="wrapper">
		<div class="fbLike"></div>
		<header id="logo" class="ib">
			<a href="<?php webPageUrlAu('indexPage'); ?>" title="每得科技"><img src="images/logo.png" alt=""></a>
		</header>
		<div class="quick_login">
			<!-- 登入前 顯示 ↓↓↓ -->
			<a href="login.php" class="quick_login-wrap">
				<span class="icon ib"></span>
				<span class="btn btn-quick_login ib"><button class="hide_text">會員登入</button></span>
			</a>

			<!-- 登入後 顯示 ↓↓↓ -->
			<a href="login.php" class="quick_login-wrap">
				<span class="icon ib"></span>
				<span class="btn btn-quick_login signOut ib"><button class="hide_text">會員登入</button></span>
			</a>
		</div>
	</div>
	</section>
	<section class="header-nav">
		<div class="wrapper">
		<nav class="main_nav ib">
			<ul class="cf">
			<?php headerNavAu(); ?>

<!-- 				<li class="main_nav-item nav-XXX item<?php //echo $mainNavLen; ?>">
					<a href="<?php //echo $url; ?>">
						<span class="wrap"><span class="main_nav-icon"></span><span><?php //echo $item; ?></span></span>
					</a>
				</li> -->

			</ul>
		</nav>
		</div>
	</section>
</header>

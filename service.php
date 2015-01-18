<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>客服專區 | 每得科技</title>

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

<body class="service_page">
<?php
// -------------------------------
// Header
// -------------------------------
	include_once 'inc/Header.php';
 ?>



<div id="pageWrap">

<h1 class="pageTitle pageTitle-service">
	<div class="wrapper">
		<span class="txt hide_txt">客服專區</span>
	</div>
</h1>


<article id="main" class="new_page-main">
<div class="wrapper cf">
	<aside class="service-aside left">
		<hgroup>
			<h1 class="hide_txt">免付費電話</h1>
			<h2>0800-007-566</h2>
		</hgroup>
		<p>If you need immediate assistance, please call our toll-free number, you may also contact specific department directly by using extension below:</p>
		<h3 class="hide_txt">OUR LOCATION:</h3>
		<img src="images/temp/tem12.jpg" alt="" class="temp">
	</aside>
	<section class="container service-container left">
<div class="service-block">
	<h1 class="hide_txt">contact Medclub</h1>
	<p>Use this contact form to get your questions answered. Simply fill out all the required fields below and a Customer Service Representative will respond to your email within 1-2 business days. Whether you have a question about Medclub product or pipetman recalibration services, our representatives will provide the answers you need.</p>
	<form action="">
		<span class="input input--hoshi">
			<input class="input__field input__field--hoshi" type="text" id="input-4" />
			<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
				<span class="input__label-content input__label-content--hoshi">Contact Name:</span>
			</label>
		</span>
		<span class="input input--hoshi">
			<input class="input__field input__field--hoshi" type="text" id="input-5" />
			<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
				<span class="input__label-content input__label-content--hoshi">Company Name:</span>
			</label>
		</span>
		<span class="input input--hoshi">
			<input class="input__field input__field--hoshi" type="text" id="input-6" />
			<label class="input__label input__label--hoshi input__label--hoshi-color-3" for="input-6">
				<span class="input__label-content input__label-content--hoshi">Email Address:</span>
			</label>
		</span>
		<label for="" class="textarea-label">Subject:</label>
		<textarea name="" id=""></textarea>
		<div class="btns">
			<span class="btn btn-service btn-reset"><input type="reset" name="" id="" value="CLEAR FIELD"></span>
			<span class="btn btn-service btn-submit"><input type="reset" name="" id="" value="SEND EMAIL"></span>
		</div>
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

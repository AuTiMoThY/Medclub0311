<?php 


/**
* 
*/
class PageUrlAu {
	public $webPageBuild    = "javascript: alert('網頁建置中，敬請稍待!');";
	public $indexPage       = "index.php";
	public $newPage         = "new.php";
	public $productPage     = "product1.php";
	public $recalibratePage = "recalibrate.php";
	public $servicePage     = "service.php";
	public $linksPage       = "links.php";
	public $pointPage       = "point.php";
	public $memberPage      = "member.php";


}
/**
* 
*/
class navAu extends PageUrlAu {

	function navListAu($headerOrFooter) {

		$Nav = array(
                        '最新優惠'      => $this->newPage,
                        '產品專區'      => $this->productPage,
                        '引子訂購'      => "http://sg.idtdna.com/site",
                        '校正服務'      => $this->recalibratePage,
                        '會員專區'      => $this->memberPage,
                        '客服專區'      => $this->servicePage,
                        '相關連結'      => $this->linksPage,
                        '積點兌換'      => $this->pointPage);
		$NavLen = 0;
		$NavLen ++;

		if ($headerOrFooter == 'headerNav') {
			foreach ($Nav as $item => $url) {

echo <<<_OUTPUT
<li class="main_nav-item nav-Medclub item$NavLen">
	<a href="$url">
		<span class="wrap"><span class="main_nav-icon"></span><span class="main_nav-txt">$item</span></span>
	</a>
</li>
_OUTPUT;

				++$NavLen;
			}
		} elseif ($headerOrFooter == 'footerNav') {
			foreach ($Nav as $item => $url) {

echo <<<_OUTPUT
<li class="footer_nav-item nav-Medclub item$NavLen">
	<a href="$url">
		<span class="wrap"><span class="footer_nav-icon"></span><span class="main_nav-txt">$item</span></span>
	</a>
</li>
_OUTPUT;

				++$NavLen;
			}
		}
	}
}

/**
* function
*/

function headerNavAu(){
	$navAu = new navAu();
	$navAu -> navListAu($headerOrFooter ='headerNav');

}

function footerNavAu(){
	$navAu = new navAu();
	$navAu -> navListAu($headerOrFooter ='footerNav');

}

function webPageUrlAu($url){
	$PageUrlAu = new PageUrlAu();
	echo $PageUrlAu->{$url};
}



 ?>
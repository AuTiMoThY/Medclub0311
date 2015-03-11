/*--------------------------------------*\
	Medclub
			by DFocus AuTiMoThY
\*--------------------------------------*/


function viewPortWidthHeight() {
  var wh = {};
  if(window.innerWidth) {
      wh.width = window.innerWidth;
      wh.height = window.innerHeight;
  }
  else if(document.documentElement.clientWidth) {
      wh.width = document.documentElement.clientWidth;
      wh.height = document.documentElement.clientHeight;
  }
  else if(document.body.clientWidth) {
      wh.width = document.body.clientWidth;
      wh.height = document.body.clientHeight;
  }
  return wh;
}

function loginBlockQWidthHeight(){
	var wh = {};
	var exchangeBlock = document.getElementById('exchangeBlock');

	if (exchangeBlock) {
		
		wh.width = exchangeBlock.offsetWidth;
		wh.height = exchangeBlock.offsetHeight;
	}

	return wh;
}
function resizeBlock (){
	// console.log("yoyo")
  var exchangeBlock = document.getElementById('exchangeBlock');
  // var $exchangeBlock = $("#exchangeBlock");
  var blockWH = loginBlockQWidthHeight();
  var blockW = blockWH.width;
  var blockH = blockWH.height;

  var viewPortWH = viewPortWidthHeight();
  var viewPortW = viewPortWH.width;
  var viewPortH = viewPortWH.height;

  var blockPosY = viewPortH - blockH;
  var blockPosX = viewPortW - blockW;
// console.log('blockH:'+blockH+',viewPortH:'+viewPortH+',blockPos:'+blockPos);
	if (exchangeBlock) {
		exchangeBlock.style.top = blockPosY / 2 + 'px';
		exchangeBlock.style.left = blockPosX / 2 + 'px';
	}
}

$(window).on('resize scroll', function () {
  // resizeBlock();
});


$(function () {
	var $win = $(window);

	// resizeBlock();

	function fadeOutAu(){
		$(".blackQQ").fadeOut(600);
		$("#exchangeBlock").fadeOut(600);
	}

	function fadeInAu(){
		$(".blackQQ").fadeIn(600);
		$("#exchangeBlock").fadeIn(600);
	}

	function blackQQDefault() {
		$("#blackQQ").hide();
		$("#exchangeBlock").hide();
	}

	if ($(".blackQQ").length)
		blackQQDefault();
		$("#exchangeBlockClose").click(function() {
			fadeOutAu();
		});
		$(".blackQQ").click(function() {
			fadeOutAu();
		});
		$(".exchangeBlockOpen").click(function() {
			fadeInAu();
		});


	$(".main_nav-item.item3").children('a').attr('target', '_blank');

/*----------------------------------------------------------------------------*\
	 跑馬燈
\*----------------------------------------------------------------------------*/
	 // 先取得 section#indexBrand ul
	 // 接著把 ul 中的 li 項目再重覆加入 ul 中(等於有兩組內容)
	 // 再來取得 section#indexBrand 的高來決定每次跑馬燈移動的距離
	 // 設定跑馬燈移動的速度及輪播的速度
	 var $marqueeUl = $('#popularProdMarquee ul'),
		 $marqueeli = $marqueeUl.children().length;
		  // console.log("$marqueeli:"+$marqueeli);
	 if ($marqueeUl.length && $marqueeli>3) {

		  var  $marqueeUl = $('#popularProdMarquee ul'),
			   $marqueeli = $marqueeUl.children(),
			   // $marqueeli = $marqueeUl.append($marqueeUl.html()).children(),
			   $marqueeCtrl = $('#marqueeCtrl .marquee_btn'),
			   _height = ( $('.popular_prod-item').outerHeight() ) * -1,
			   showNumber = 3,
			   scrollSpeed = 600,
			   timer,
			   speed = 3000 + scrollSpeed,
			   direction = 0,     // 0 表示往上, 1 表示往下
			   _lock = false;
	 
		  $marqueeUl.height($marqueeli.length * $('.popular_prod-item').outerHeight());
		  console.log("_width:"+_height);
		  // 先把 $marqueeli 移動到第二組
		  // $marqueeUl.css('left', $marqueeli.length / 2 * _width);
	 
		  // 幫左邊 $marqueeli 加上 hover 事件
		  // 當滑鼠移入時停止計時器；反之則啟動
		  $marqueeli.hover(function(){
			   clearTimeout(timer);
		  }, function(){
			   timer = setTimeout(showad, speed);
		  });
	 
		  // 判斷要往上還是往下
		  $marqueeCtrl.click(function(){
			   if(_lock) return;
			   clearTimeout(timer);
			   direction = $(this).attr('id') == 'marquee_next_btn' ? 0 : 1;
			   showad();
		  });
	 
		  // 控制跑馬燈上下移動的處理函式
		  function showad(){
			   _lock = !_lock;
			   var ulTop = $marqueeUl.position().top;
			   var _now = ulTop / _height;
			   if (direction) {
					if (_now > 0) {
						 _now = _now-2;
					}else if(_now < 0){
						 _now = 0;
					}else {
						 return false;
					};
			   } else{
					_now = _now % $marqueeli.length;
			   };
			   // _now = (direction ? _now - $marqueeli.length : _now)  % $marqueeli.length;
			   // console.log("$marqueeli.length:"+$marqueeli.length);
			   _now ++;
			   console.log("_now:"+_now);
			   // $marqueeUl 移動
			   if (_now <= $marqueeli.length - showNumber) {
					$marqueeUl.animate({
						 top: _now * _height
					}, scrollSpeed, function(){
						 _lock = !_lock;
					});
			   }
			   if (_now > $marqueeli.length - showNumber){
					_now = 0;
					$marqueeUl.animate({'top': 0}, scrollSpeed, function(){
						 _lock = !_lock;
					});
			   };
			   if (_now <= 0) {
					_now = 0;
			   };
			   /*
			   $marqueeUl.animate({
					left: _now * _width
			   }, scrollSpeed, function(){
					// 如果已經移動到第二組時...則馬上把 left 設回到第一組的最後一筆
					// 藉此產生不間斷的輪播
					if(ulTop == (($marqueeli.length - showNumber)) * _width){ 
						 console.log("$marqueeli.lengthQ:"+$marqueeli.length);
						 console.log(_now);
						 $marqueeUl.animate({'left': 0}, scrollSpeed);
						 // $marqueeUl.css('left', $marqueeli.length * _width - _width);
						 // _now = 0;
					}
					if(_now == 0){
						 $marqueeUl.css('left', '0');
					}
					_lock = !_lock;
			   });
			   */
			   // 再啟動計時器
			   timer = setTimeout(showad, speed);
		  }
	 
		  // 啟動計時器
		  timer = setTimeout(showad, speed);
	 
		  $('a').focus(function(){
			   this.blur();
		  });
	 };


	var $prodAside = $("#prodAside .asideWrapper");
	if ($prodAside.length) {
		$prodAside.sticky({topSpacing:10});
		// var _moveSpeed = 600;
		// $win.bind('scroll resize', function(){
		// 	var $this = $(this);
		// 	var MM = $this.scrollTop();

		// 	if(MM>=50){
		// 		$prodAside.stop().animate({
		// 			top: 50
		// 		}, _moveSpeed, 'easeOutQuint');
		// 	}else {
		// 		$prodAside.stop().animate({
		// 			top: 0
		// 		}, _moveSpeed, 'easeOutQuint');
		// 	};
		// }).scroll();
	};

	
    var getLazyloadColumn = function(lazyclsname,nolazyclsname,callback){
        $("."+lazyclsname).each(function(i , el){
            var column = $(el).not(":has(."+lazyclsname+")");
            if(column.length){
                var imgs = column.find("img").not("."+nolazyclsname+" img");
                if(imgs.length){callback(imgs);}
            }else{
                var imgs = $(el).find("img").not("."+lazyclsname+" ."+lazyclsname+" img").not("."+nolazyclsname+" img");
                if(imgs.length){callback(imgs);}
            }
        });
    };
    getLazyloadColumn("lazyload","nolazyload_img",function(imgs){
        imgs.lazyload({
           effect : "fadeIn"
        });
    });

});
$(function(){
	$('.gNav .toggle').click(function(){
		if( $(this).hasClass('open')  ) {
			$(this).toggleClass('open'); 
			close(); 
		}else{
			$(this).toggleClass('open');
		}
		$('.gNav .menu').toggleClass('open');
	});

	$('.header-searchBtn').click(function(){
		$('.search').toggleClass('is-open');
	});

	$('.header-menuBtn').click(function(){
		$('.gNav .toggle').click();
		$('.gNav .menu li:nth-child(3)').click();
	});

	$('.gNav .menu li:nth-child(2)').click(function(){
		if( !$('.overlayBlock').hasClass('visible') ) { $('.overlayBlock').toggleClass('visible'); }
		if( $('.menuBlock.category').hasClass('boxActive') ) { $('.menuBlock.category').toggleClass('boxActive'); }
		$('.menuBlock.share').toggleClass('boxActive');
	});

	$('.gNav .menu li:nth-child(3)').click(function(){
		if( !$('.overlayBlock').hasClass('visible') ) { $('.overlayBlock').toggleClass('visible'); }
		if( $('.menuBlock.share').hasClass('boxActive') ) { $('.menuBlock.share').toggleClass('boxActive'); }
		$('.menuBlock.category').toggleClass('boxActive');
	});

	var _index = 0;
	var _loop = false;
	$('.menuBlock.category ul li.nest > a').on('touchend', function(){
		$('.menuBlock.category ul li.nest .child').slideUp();
		$('.menuBlock.category ul li.nest > a').removeClass('up');
		
		if( _index === $('.menuBlock.category ul li').index( $(this).parent() ) && _loop === true ){
			_loop = false;
			return false;
		}else{
			_index = $('.menuBlock.category ul li').index( $(this).parent() );
			_loop = true;
			$(this).addClass('up');
			$(this).next().slideToggle();
		}
	});

	function close() {
		$('.overlayBlock').removeClass('visible');
		$('.menuBlock.share').removeClass('boxActive');
		$('.menuBlock.category').removeClass('boxActive');
	}

	/*var diff = 0;
	$(document).on('touchmove','.categoryBox',function(e){
		var touch = event.touches[0];
		$('#Check').text(touch.pageY);
		diff = touch.pageY;
		if( diff > touch.pageY){
			$('.categoryBox').css({ '-webkit-transform' : 'translate3d(0px,'+ touch.pageY +'px, 0px)' });
		}else{
			$('.categoryBox').css({ '-webkit-transform' : 'translate3d(0px, -'+ touch.pageY +'px, 0px)' });
		}
	});*/

	/*$(document).on('click','.overlay.visible',function(){
		close();
	});*/

	$('.overlayBlock .overlayBlock-close').click(function(){
		close();
	});

	$('.pageTop').smoothScroll({
		offset: 0,
		speed: 300
	});
});

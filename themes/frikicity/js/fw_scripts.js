$(document).ready(function(){		
	/*MainMenu SetUp
	================*/
	$('.mainmenu').find('li:has(ul)').addClass('has-menu');
	$('.menu_indicator').stop().animate({'opacity' : '0'},1);
	$('.sub_menu').animate({'opacity' : '0'},1);
	$('.mobile_menu').html($('.mainmenu').html());
	$('.mobile_menu').find('li.sep').remove();

	/*MainMenu Hover FX
	===================*/
	$('.mainmenu > li').hover(function(){
		nav_offset = $('.head_nav').offset();
		offset = $(this).offset();
		cur_lt = offset.left - nav_offset.left;
		cur_top = offset.top - nav_offset.top;
		$('.menu_indicator').stop().animate({'opacity' : '1', 'left' : cur_lt+'px', 'top' : cur_top + 'px'},400);
		$(this).children('a').stop().animate({'color' : '#006699'},300);
	}, function(){
		$(this).children('a').stop().animate({'color' : '#FFFFFF'},300);
	});
	$('.mainmenu').mouseleave(function(){
		$('.menu_indicator').stop().animate({'opacity' : '0'},300);
	});
	
	/*SubMenu Script
	================*/
	$('.mainmenu').find('li.has-menu').hover(function(){
		showed_menu = $(this).children('.sub_menu');
		showed_menu.css('display', 'block');
		showed_menu.stop().animate({'opacity' : '1'}, 300);
	}, function(){
		showed_menu = $(this).children('.sub_menu');
		showed_menu.stop().animate({'opacity' : '0'}, 300, function() {$(this).css('display', 'none');});
	});
		
	/*MobileMenu Scripts
	====================*/
	$('.menu_toggle').click(function(){
		$(this).toggleClass('act');
		$('.mobile_menu').slideToggle();
	});
});

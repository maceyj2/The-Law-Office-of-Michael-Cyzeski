$(function() {
	
// set main content column and contact form column to equal height
	function equalCol(){
		var $leftCol = $('article.mq2-col_two_thirds','section.grid_wrap');
		var leftColHeight = $leftCol.height();
		var leftColInnerHeight = $('div#left_inner',$leftCol).height();
		var $rightCol = $('article.mq2-col_one_third','section.grid_wrap');
		var rightColHeight = $rightCol.height();
		var rightColInnerHeight = $('div#right_inner',$rightCol).height();
		
		if ($(window).width() > 780) {
			if (leftColInnerHeight > rightColInnerHeight) {
				$rightCol.height(leftColInnerHeight);
			} else {
				$rightCol.height(rightColInnerHeight);
			}
		} else {
			$rightCol.height(rightColInnerHeight);
		}
	}
	
	equalCol();
	
// nav click and hover functions
	var $body = $('body');
	var $topNav = $('nav#top_nav');
	var $subNavParent = $('ul#sub_nav_parent');
	var $toheader_top = $('div#footer_outer a#to_header_top');
		
	// nav hover function
	function onHoverMenu(){
		$(this).children('a:first-child').addClass('sub_hover');
		$(this).children('ul[class^="sub_nav"]').slideDown(300);
	}
	function offHoverMenu(){
		$(this).children('a:first-child').removeClass('sub_hover');
		$(this).children('ul[class^="sub_nav"]').fadeOut(100);
	}
	var openTier = {    
	  over: onHoverMenu, // function = onMouseOver callback (REQUIRED)    
	  timeout: 250, // number = milliseconds delay before onMouseOut    
	  out: offHoverMenu // function = onMouseOut callback (REQUIRED) 
	};
	
	// show/hide mobile elements, turn on/off click/hover events
	function navType(){
		if ($(window).width() < 780 || (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent))) {
			$body.addClass('mobile');
			$('.hide_mobile').each(function(){
				if (!$(this).is(':visible')) {
					$(this).hide();
				}
			});
			$('li',$subNavParent).off('mouseenter').off('mouseleave');
			$('a.top_level',$subNavParent).on('click');
		} else {
			$body.removeClass('mobile');
			$('.hide_mobile').each(function(){
				if (!$(this).is(':visible')) {
					$(this).show();
				}
			});
			$('.open',$subNavParent).removeClass('open');
			$('li',$subNavParent).hoverIntent(openTier);
		}
	}
	
	navType();
	
	// nav click sub nav function
	$('a.top_level',$subNavParent).on('click',function(e){
		e.preventDefault();
		if ($(this).hasClass('open')) {
			$(this).removeClass('open').siblings('ul').slideUp(100);
			// also close nested list if open
			if ($(this).is('a.top_level') && $('ul.sub_nav_2').length) {
				$('ul.sub_nav_1 a',$subNavParent).removeClass('open');
				$('ul.sub_nav_2',$subNavParent).slideUp(100);;
			}
		} else {
			// close open list before opening new list
			if ($('a.top_level.open',$subNavParent).length) {
				$('ul.sub_nav_1 a.top_level',$subNavParent).removeClass('open');
				$('ul.sub_nav_2',$subNavParent).slideUp(100);
			}
			$(this).addClass('open').siblings('ul').slideDown(200);
		}
	});
	
	// set margin of content on homepage based off image height
	function setHero(){
		var $hero = $('#boston_pano img').height();
		var $homeTop = $('#home_top');
		$homeTop.css({'margin-top':$hero/2});
	}
	
	setHero();
	
	$(window).resize(function(){
		navType();
		equalCol();
		setHero();
	});
	
	// show whichever item based off the icon click - mobile only
	$('.has_data').on('click',function(e){
		e.preventDefault();
		var dataInfo = $(this).data('trigger');
		
		if ($(this).hasClass('disabled')) {
			$('#'+dataInfo+'').slideUp(100);
			$(this).removeClass('disabled');
		} else {
			$('#'+dataInfo+'').slideDown(200);
			$(this).addClass('disabled');
		}
	});
	
// contact form validation 	
	if ($().validate) {
		$('form#contact_form').validate();
	};

});

$(function(){function e(){var e=$("article.mq2-col_two_thirds","section.grid_wrap"),t=e.height(),n=$("#left_inner",e).height(),r=$("article.mq2-col_one_third","section.grid_wrap"),i=r.height(),s=$("#right_inner",r).height();$(window).width()>780?n>s?r.height(n):r.height(s):r.height(s)}function s(){$(this).children("a:first-child").addClass("sub_hover");$(this).children('ul[class^="sub_nav"]').slideDown(300)}function o(){$(this).children("a:first-child").removeClass("sub_hover");$(this).children('ul[class^="sub_nav"]').fadeOut(100)}function a(){if($(window).width()<780||/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){t.addClass("mobile");$(".hide_mobile").each(function(){$(this).is(":visible")||$(this).hide()});r.find("li").off("mouseenter").off("mouseleave");$("a.top_level",r).on("click")}else{t.removeClass("mobile");$(".hide_mobile").each(function(){$(this).is(":visible")||$(this).show()});r.find(".open").removeClass("open");r.find("li").hoverIntent(u)}}function f(){var e=$("#boston_pano img").height(),t=$("#home_top");t.css({"margin-top":e/2})}e();var t=$("body"),n=$("#top_nav"),r=$("ul#sub_nav_parent"),i=$("#footer_outer #to_header_top"),u={over:s,timeout:250,out:o};a();$("a.top_level",r).on("click",function(e){e.preventDefault();if($(this).hasClass("open")){$(this).removeClass("open").siblings("ul").slideUp(100);if($(this).is("a.top_level")&&$("ul.sub_nav_2").length){$("ul.sub_nav_1 a",r).removeClass("open");$("ul.sub_nav_2",r).slideUp(100)}}else{if($("a.top_level.open").length){$("ul.sub_nav_1 a.top_level",r).removeClass("open");$("ul.sub_nav_2",r).slideUp(100)}$(this).addClass("open").siblings("ul").slideDown(200)}});f();$(window).resize(function(){a();e();f()});$(".has_data").on("click",function(e){e.preventDefault();var t=$(this).data("trigger");if($(this).hasClass("disabled")){$("#"+t+"").slideUp(100);$(this).removeClass("disabled")}else{$("#"+t+"").slideDown(200);$(this).addClass("disabled")}});$().validate&&$("#contact_form").validate()});
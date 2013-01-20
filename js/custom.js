$(document).ready(function() {

//	if ($.browser.msie && parseInt($.browser.version, 10) < 10) {
//		$('#header H1, #header .currentime').each(function() {
//			var el = $(this);
//			el.append($('<ins />').text(el.text()));
//		});
//	}
//
//	if ($.browser.msie && parseInt($.browser.version) < 9) {
//		$('#tables tbody').each(function() {
//			$('tr:odd', this).addClass('even');
//		});
//	}

	var showErrorMessage = function (el, er, ep) {
		el.closest('#form').find('SPAN.error').css({
			top  : -9999,
			left : -9999
		});

		er.css({
			top  : ep.top - er.outerHeight(true) - 6,
			left : ep.left - 10
		});
	};

	var hideErrorMessage = function (er) {
		er.css({
			top  : -9999,
			left : -9999
		});
	};

	$('#form INPUT.error, #form SELECT.error').each(function(i) {
		var el = $(this),
				ep = el.position(),
				er = el.next();

		if (!el.next().is('SPAN.error')) er = el.parent().find('SPAN.error');

		if (i == 0) {
			er.css({
				top  : ep.top - er.outerHeight(true) - 6,
				left : ep.left - 10
			});
		}

		$(el).bind({
			'focusin mouseenter': function() {
				showErrorMessage(el, er, ep);
			},
			'focusout mouseleave': function() {
				hideErrorMessage(er);
			},
			keypress: function() {
				hideErrorMessage(er);
			}
		});
	});


	$('#aboutBoxLink').click(function(event) {
		event.preventDefault();
		$("#dialog-applicationInfo").load("/seclimits/about.htm");
		$("#dialog-applicationInfo").dialog("open");
		return false;
	});

//	var head = $('table thead TR');
//
// 	$('.wrapper_head').append('<div class="fixed_head"><table></table></div>');
//
//	head.find('TH').each(function() {
//
//		var el = $(this);
//
//		el.css({
//			width : el.width()
//		});
//
//	}).end().clone().appendTo('.fixed_head table').end();
//
//	$("#jsmith").click(function(){
//
//		if($('.cont_table').hasClass('scroll') && $('.cont_item').hasClass('select')){
//
//			$('.cont_table').removeClass('scroll');
//			$('.cont_item').removeClass('select');
//
//		}else{
//
//			$('.cont_table').addClass('scroll');
//			if($('.cont_item').height() > 100){
//				$('.cont_item').addClass('select');
//			}else{
//				$('.cont_item').addClass('select');
//
//					$('.cont_table').css('height', $('.cont_right').height() - $('.cont_item').height() - $('.cont_table_bar').height() - 70 + "px");
//
//					$(window).resize(function(){
//						var height = $(window).height();
//						$('.cont_table').css('height', $('.cont_right').height() - $('.cont_item').height() - $('.cont_table_bar').height() - 70 + "px") + height;
//				});
//			}
//
//		}
//
//	});

//	$("#jsmith_curt").click(function(){
//
//		if($('.cont_item').hasClass('select') && $('.cont_right').hasClass('vertical')){
//
//			$('.cont_right').removeClass('vertical');
//
//			$('.cont_item').removeClass('select');
//
//		}else{
//
//			$('.cont_right').addClass('vertical');
//			$('.right_top_cont').css('width', $('.right_top_cont').width() - 390 + "px");
//
//
//			$(window).resize(function(){
//				var width = $(window).width();
//
//				$('.right_top_cont').css('width', $('.cont_right').width() - $('.cont_item').width() - 90 + "px") + width;
//			});
//
//			$('.cont_table').addClass('scroll');
//			$('.cont_item').addClass('select');
//
//			$('.cont_table').css('height', $('.cont_right').height() - 96 + "px");
//
//			$(window).resize(function(){
//				var height = $(window).height();
//				$('.cont_table').css('height', $('.cont_right').height() - 96 + "px") + height;
//			});
//
//
//		}
//
//	});

});

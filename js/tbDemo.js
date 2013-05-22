/* STYLE SWITCHER */
jQuery(document).ready(function() {
	$("#styleChanger").addClass('hidden');
	$("#styleChanger .trigger a").click(function() {
		if ($("#styleChanger").hasClass("hidden")) {
			$("#styleChanger").animate({"left": "0px"}, "slow").removeClass('hidden');
		} else {
			$("#styleChanger").animate({"left": "-362px"}, "slow").addClass('hidden');
		}
	});
});

/* jQuery Cookie */
$(document).ready(function() {
	if($.cookie("headerBckg")) {
		var css = $.cookie("headerBckg");
		$("#header").removeClass().addClass(css).addClass('width100');
	}

	$(".headerBckg a").click(function() { 
		var css = $(this).attr('data-rel');
		$("#header").removeClass().addClass(css).addClass('width100');
		$.cookie("headerBckg", css, {expires: 365, path: '../../default.htm'});
		return false;
	});


	if($.cookie("footerBckg")) {
		var css = $.cookie("footerBckg");
		$("#footer").removeClass().addClass(css).addClass('width100');
	}

	$(".footerBckg a").click(function() { 
		var css = $(this).attr('data-rel');
		$("#footer").removeClass().addClass(css).addClass('width100');
		$.cookie("footerBckg", css, {expires: 365, path: '../../default.htm'});
		return false;
	});

	if($.cookie("buttonsBckg")) {
		var css = $.cookie("buttonsBckg");
		$("#content").removeClass().addClass(css);
			
		if (css == 'violet') {
			$("#sidebar").removeClass().addClass('purple');
		} else {
			$("#sidebar").removeClass().addClass(css);
		}
	}

	$(".buttonsBckg a").click(function() { 
		var css = $(this).attr('data-rel');
		$("#content").removeClass().addClass(css);
		
		if (css == 'violet') {
			$("#sidebar").removeClass().addClass('purple');
		} else {
			$("#sidebar").removeClass().addClass(css);
		}
		
		
		$.cookie("buttonsBckg", css, {expires: 365, path: '../../default.htm'});
		return false;
	});

	if($.cookie("themeFont")) {
		var font = $.cookie("themeFont");
		$("#themeFont").attr("href", 'styles/fonts/' + font + '.css');
	}

	$("#fontSwitch select").change(function() { 
		var font = $(this).children('option:selected').attr('value');
		
		if (font == 0) {
			font = 'lora';
		}
		
		$("#themeFont").attr("href", 'styles/fonts/' + font + '.css');
		$.cookie("themeFont", font, {expires: 365, path: '../../default.htm'});
		return false;
	});
});
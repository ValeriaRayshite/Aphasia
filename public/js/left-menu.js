$(document).ready(function(){
	$('nav > ul > li#active >a').each(function () {
  		if($(this).attr('href') == location.href) $(this).addClass('active');
	});
});

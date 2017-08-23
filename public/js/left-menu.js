
function openLeftMenu() {

	if (window.innerWidth < 900) {
            document.getElementById("left-menu").style.width = "100%";
        }
}
	function closeLeftMenu() {
        	document.getElementById("left-menu").style.width = "0";
	}
 

$(document).ready(function(){
	$('nav > ul > li#active >a').each(function () {
  		if($(this).attr('href') == location.href) $(this).addClass('active');
	});
});

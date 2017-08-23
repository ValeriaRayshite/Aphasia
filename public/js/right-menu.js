function openRightMenu() {

	if (window.innerWidth > 1000) {
	    document.getElementById("right-menu").style.width = "200px";
	} else {
	    document.getElementById("right-menu").style.width = "100%";
	}
}

function closeRightMenu() {
        document.getElementById("right-menu").style.width = "0";
}



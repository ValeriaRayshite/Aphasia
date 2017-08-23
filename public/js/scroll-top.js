
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        		document.getElementById("arrow").style.display = "inline";
		    } else {
        		document.getElementById("arrow").style.display = "none";
	        	}
		}

		// When the user clicks on the button, scroll to the top of the document
		function scrollToTop() {
		    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
		    document.documentElement.scrollTop = 0; // For IE and Firefox
		}



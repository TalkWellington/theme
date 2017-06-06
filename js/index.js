document.addEventListener("DOMContentLoaded", function(event) {
	var menu = document.getElementById("menu")

	document.getElementById("x-button").addEventListener("click", toggleNav) // 'x' to close slide-menu
	document.getElementById("slide-menu-button").addEventListener("click", toggleNav)

	function toggleNav() {
		if (menu.style.width == '250px') {
			menu.style.width = '0px'	
		}else{
			menu.style.width = '250px'
		}
	    // Should change this to a class added/removed.
	}
}); //DOMContentLoaded braces
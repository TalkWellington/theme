document.addEventListener("DOMContentLoaded", function(event) {
	var menu = document.getElementById("menu")
	document.getElementById("x-button").addEventListener("click", toggleNav) // 'x' to close slide-menu
	document.getElementById("slide-menu-button").addEventListener("click", toggleNav)
	

	function toggleNav() {
		if(menu.classList.contains("popout-open")){
			menu.classList.remove("popout-open")
		}else{
			menu.classList.add("popout-open")
		}
	}

});
// Function toggles navigation menu
function toggleNavBar() {
    var navBarItems = document.getElementsByClassName("navBarContent");

	for (var i = 0; i < navBarItems.length; i++) 
		navBarItems[i].classList.toggle("show");
}


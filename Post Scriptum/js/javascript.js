// Function toggles navigation menu
function toggleNavBar() {
    var navBarItems = document.getElementsByClassName("navBarContent");

	for (var i = 0; i < navBarItems.length; i++) 
		navBarItems[i].classList.toggle("show");
}

// Function loads dropdown menu for user dropdown button
function up() {
	var dropdownMenu = document.getElementById("usr-dropdown");
	var xmlhttp;

	if (window.XMLHttpRequest) 
	   xmlhttp = new XMLHttpRequest();
	else 
	   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	
	xmlhttp.onreadystatechange = function() {
	   if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	   		
	   		var dropdownUl = document.createElement('ul');
	   		dropdownUl.innerHTML = xmlhttp.responseText;
	   		dropdownUl.classList.add('dropdown-menu');
	   		dropdownMenu.appendChild(dropdownUl);
	   }
	   else if(xmlhttp.readyState == 4 && xmlhttp.status == 401)
	   	window.location.assign('../pages/login.php');
	}

	xmlhttp.open("GET", "../php/get_user_dropdown.php", true);
	xmlhttp.send();
	return true;
}

// Sticky navbar
$(document).ready(function () {

var menu = $('.main-nav');
var origOffsetY = menu.offset().top;

function scroll() {
    if ($(window).scrollTop() >= origOffsetY) {
        $('.main-nav').addClass('navbar-fixed-top');
        $('#navbar-right-content').addClass('fix-margin-right');
    } else {
        $('.main-nav').removeClass('navbar-fixed-top');
        $('#navbar-right-content').removeClass('fix-margin-right');
    }
   }

  document.onscroll = scroll;
});
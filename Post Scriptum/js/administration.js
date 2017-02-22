window.onload = function() {
	load('kreiranje_vijesti');
}

// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
// ------------------------------------------------>
//           Function for loading subpages
// ------------------------------------------------>
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
function load(page) {
	var pageID = page;
	var pageRequest;

	if(window.XMLHttpRequest)
		pageRequest = new XMLHttpRequest();
	else
		pageRequest = new ActiveXObject('Microsoft.XMLHTTP');

	page = 'private_html/' + page + '.php';
	pageRequest.open('GET', page, true);

	pageRequest.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			document.getElementById('content-holder').innerHTML = this.responseText;
		}
	};

	pageRequest.send();
	return false;
}

// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
// ------------------------------------------------>
//           Function for loading scripts
// ------------------------------------------------>
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
function loadPageScripts(page) {
	if(page === 'kreiranje_vijesti') 
		loadCKeditor();
}

jQuery.loadScript = function(url, callback) {
	jQuery.ajax({
		url: url,
		dataType: 'script',
		success: callback,
		async: true
	});
}

function loadCKeditor() {
	$.loadScript('../ckeditor/ckeditor.js', function() {});
}
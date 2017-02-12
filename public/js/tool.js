// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
	modal.style.display = "block";
	grapesBox.style.display = "none";
	wineryBox.style.display = "none";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
	grapesBox.style.display = "block";
	wineryBox.style.display = "block";
}

// Grape Modal
// Get the modal
var grapemodal = document.getElementById('grapeModal');
var grapesBox = document.getElementById('grapes');
var wineryBox = document.getElementById('winery');
// Get the button that opens the modal
var grapebtn = document.getElementById("getgrapes");

// Get the <span> element that closes the modal
var grapespan = document.getElementsByClassName("grapeclose")[0];

// When the user clicks on the button, open the modal
grapebtn.onclick = function() {

	grapemodal.style.display = "block";
	grapesBox.style.display  = "none";
	wineryBox.style.display  = "none";
}
// When the user clicks on <span> (x), close the modal
grapespan.onclick = function() {
	grapemodal.style.display = "none";
	grapesBox.style.display  = "block";
	wineryBox.style.display  = "block";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == grapemodal) {
		grapemodal.style.display = "none";
		grapesBox.style.display  = "block";
		wineryBox.style.display  = "block";
	}
	if (event.target == modal) {
		modal.style.display = "none";
		grapesBox.style.display = "block";
		wineryBox.style.display = "block";
	}
}



window.onload = function() {
	$('body').show();
	Hackerspace.onload();

	$('header div.text').hide();
}

window.onscroll = function() {
	Hackerspace.onscroll();
}

var openGame = function(id) { window.location = `game.html?g=${id}`; }
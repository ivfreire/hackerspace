
window.onload = function() {
	Hackerspace.onload();
}

window.onscroll = function() {
	Hackerspace.onscroll();
}

var openGame = function(id) { window.location = `game.html?g=${id}`; }
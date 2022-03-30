
window.onload = function() {
	$('body').show();

	Hackerspace.onload();
}

window.onscroll = function() {
	Hackerspace.onscroll();

	let parallax = 0.4;
	$('header').css({
		'backgroundPositionY': - window.scrollY * parallax
	});
}

var openGame = function(id) { window.location = `game.html?g=${id}`; }
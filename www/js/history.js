
// Roda quando a página terminar de carregar
window.onload = function() {
	$('body').show();

	Hackerspace.onload();

	$('header div.text').hide();
	$('header div.text').fadeIn(500);
}

window.onscroll = function() {
	Hackerspace.onscroll();
}
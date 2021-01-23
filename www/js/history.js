
// Roda quando a página terminar de carregar
window.onload = () => {
	$('body').show();

	Hackerspace.onload();

	$('header div.text').hide();
	$('header div.text').fadeIn(500);
}

// Roda quando a página terminar de carregar
window.onload = () => {
	Hackerspace.init();
	
	$('body').show();

	$('header div.text').hide();
	$('header div.text').fadeIn(500);
}
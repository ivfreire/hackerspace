
// Roda quando a página terminar de carregar
window.onload = () => {
	$('header').height(window.innerHeight);

	Hackerspace.init();
	
	$('body').show();

	$('header div.text').hide();
	$('header div.text').fadeIn(500);
}
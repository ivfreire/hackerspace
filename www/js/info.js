
var AnimeCtrl = {
	init: () => {
		AnimeCtrl.canvas = document.getElementsByTagName('canvas')[0];
		AnimeCtrl.canvas.width = window.innerWidth;
		AnimeCtrl.canvas.height = window.innerHeight;

		AnimeCtrl.ctx = AnimeCtrl.canvas.getContext('2d');
		AnimeCtrl.ctx.strokeStyle = "#17739A";

		AnimeCtrl.render(AnimeCtrl.ctx);
	},
	render: (ctx) => {

	}
}

// Roda quando a página terminar de carregar
window.onload = () => {
	AnimeCtrl.init();

	Hackerspace.init();
	
	$('body').show();

	$('header div.text').hide();
	$('header div.text').fadeIn(500);
}
// Roda quando a página terminar de carregar
window.onload = () => {
	particlesJS.load('particles-js', 'assets/particles.json', function() {
		console.log('callback - particles.js config loaded');
	});

	$('body').show();
	Hackerspace.onload();
}

window.onscroll = (ev) => {
	var y = window.scrollY;

	Hackerspace.onscroll();
}



$('header').on('mousemove', (ev) => { 
	var delta = [ ev.pageX - window.innerWidth/2, ev.pageY - window.innerHeight/2 ];
	$('header div.text').css({
		left: `${-delta[0]/30}px`,
		marginTop: `${-delta[1]/30}px`
	});
	$('header div.text h1').css({
		marginLeft: `${-delta[0]/50}px`
	});
});

// Roda quando a página terminar de carregar
window.onload = () => {
	particlesJS.load('particles-js', 'assets/particles.json', function() {
		console.log('callback - particles.js config loaded');
	});

	$('body').show();

	Hackerspace.onload();
}

window.onscroll = () =>{
	Hackerspace.onscroll();
}

$('header').mousemove((ev) => {
	var delta = [ (ev.pageX - window.innerWidth)/2, (ev.pageY - window.innerHeight)/2 ] 
	$('header div.text').css({
		left: `${-delta[0]/10}px`,
		marginTop: `${-delta[1]/7}px`
	});
	$('header div.text h1').css({ marginLeft: `${-delta[0]/25}px` });
});
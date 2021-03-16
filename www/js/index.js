
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
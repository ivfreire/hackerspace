
// Roda quando a página terminar de carregar
window.onload = () => {

	// Carrega frases de efeitos
	$.get("assets/motd.json", (data) => {
		$('header div.text h2').html(data['motd'][ Math.floor( Math.random() * data['motd'].length ) ]);
	});

	particlesJS.load('particles-js', 'assets/particles.json', function() {
		console.log('callback - particles.js config loaded');
	});

	$('body').show();

	Hackerspace.onload();
}

window.onscroll = () =>{
	Hackerspace.onscroll();
}
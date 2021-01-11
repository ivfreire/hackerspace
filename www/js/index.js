
// Roda quando a página terminar de carregar
window.onload = () => {
	$('#particles-js').width(window.innerWidth);
	$('#particles-js').height(window.innerHeight);

	// Carrega frases de efeitos
	$.get("assets/motd.json", (data) => {
		$('header div.text h2').html(data['motd'][ Math.floor( Math.random() * data['motd'].length ) ]);
	});

	Hackerspace.init();

	particlesJS.load('particles-js', 'assets/particles.json', function() {
		console.log('callback - particles.js config loaded');
	});

	$.get('assets/events.json', (data) => {
		data['events'].forEach(event => {
			var date = new Date(event['start']);
			$('div#news').append(`
					<div class='container'>
						<a href="events/?event=${event['id']}">
						<div class='content'>
							<div class='header'>
								<img src='assets/events/${event['id']}/header.jpg'/>
							</div>
							<div class='text'>
								<div class='datetime'><h3>${date.getDate()} ${month[date.getMonth()]} ${date.getFullYear()}</h3></div>
								<div class='title'><h2>${event['title']}</h2></div>
							</div>
						</div>
						</a>
					</div>
			`);
		});
	});

	$('body').show();

	var titlePos = '30%';
	if (window.innerWidth <= 800) titlePos = '50%';
	$('header div.text').animate({ bottom: titlePos, opacity: 1.0 }, 500);
}
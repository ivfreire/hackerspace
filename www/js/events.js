window.onload = function() {

	// Carrega eventos
	$.get('assets/events/events.json', function(data) {
		let first = true;
		data['events'].forEach(event => {
			if (first) {
				$('div.highlights#recents').append(`
					<div class='highlight'>
						<div class='info'>
							<div>
								<h2>${event['title']}</h2><br>
								<span>${event['date']}</span><br><br>
								<p>${event['description']}</p>
							</div>
						</div>
						<div class='image'>
							<img src='assets/events/${event['id']}/thumb.jpg'/>
						</div>
					</div>
				`);
				first = false;
			} else {
				$('div.boxes#recents').append(`
					<div class='box'>
						<div class='image'>
							<img src='assets/events/${event['id']}/thumb.jpg'/>
						</div>
						<div class='text'>
							<h2>${event['title']}</h2><br>
							<span>${event['date']}</span><br><br>
							<p>${event['description']}</p>
						</div>
					</div>
				`);
			}
		})
	});

	$('body').show();
	Hackerspace.onload();
}

window.onscroll = function() {
	Hackerspace.onscroll();
}
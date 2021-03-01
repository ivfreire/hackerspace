
window.onload = function() {

	// Carrega títulos recentes
	$.get("assets/games/games.json", (data) => {
		let index = 0;
		data['games'].reverse().forEach(game => {
			if (index < 3)
				$('div#recents').append(`
					<a href='game.html?g=${game['id']}'>
						<div class='box'>
							<div class='image'>
								<img src="assets/games/${game['id']}/thumb.jpg"/>
							</div>
							<div class='text'>
								<h2>${game['title']}</h2><br>
								<span>${game['year']}</span><br><br>
								<p>${game['description']}</p>
							</div>
						</div>
					</a>
				`);
			$('div#all-titles').append(`
				<a href='game.html?g=${game['id']}'>
					<div class='game'>
						<div class='thumb'>
							<img src='assets/games/${game['id']}/thumb.jpg'>
						</div>
						<div class='title'>
							<span>${game['title']}</span>
						</div>
					</div>
				</a>
			`);
			index++;
		});
	});

	Hackerspace.onload();

	$('div#recents > a > div div.thumb').css('max-height', '100px');
}

window.onscroll = function() {
	Hackerspace.onscroll();
}

var openGame = function(id) { window.location = `game.html?g=${id}`; }
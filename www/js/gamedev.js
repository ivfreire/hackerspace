
window.onload = function() {

	// Carrega títulos recentes
	$.get("assets/games.json", (data) => {
		data['games'].forEach(game => {
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
		});
	});

	Hackerspace.onload();

	$('div#recents > a > div div.thumb').css('max-height', '100px');
}

window.onscroll = function() {
	Hackerspace.onscroll();
}

var openGame = function(id) { window.location = `game.html?g=${id}`; }
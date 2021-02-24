
window.onload = function() {

	// Carrega títulos recentes
	$.get("assets/games.json", (data) => {
		data['games'].forEach(game => {
			$('div#recents').append(`
				<div onclick='openGame(\"${game['id']}\")'>
					<div class='header'>
						<img src='assets/games/${game['id']}/header.png'/>
					</div>
					<div class='text'>
						<div class='title'>
							<h3>${game['title']}</h3>
						</div>
					</div>
				</div>
			`);
		});
	});

	Hackerspace.onload();
}

var openGame = function(id) { window.location = `game.html?g=${id}`; }
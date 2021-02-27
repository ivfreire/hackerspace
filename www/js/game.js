
const loadGameData = function (id) {
	$.get(`assets/games/${id}/data.json`, function(game) {
		$(document).attr('title', `${game['title']} - Hackerspace IFUSP`);
		$('header').css('background-image', `url(../assets/games/${id}/thumb.jpg)`);
		$('header h1').html(game['title']);
		$('div.gameinfo div.info div.thumb').append(`<img src='assets/games/${id}/thumb.jpg'>`);

		$('div#general-info').append(`
			<h2>${game['title']}</h2><br>
			<span>${game['year']}</span><br><br>
			<p>${game['description']}</p><br>
			<a href='${game['link']}'><button>${game['title']}</button></a>
		`);
		
		game['developers'].forEach(dev => {
			$('div#devs ul').append(`
				<li>
					<span>${dev['name']}</span>
					<p>${dev['role']}</p>
				</li>
			`); 
		});

		if ('screenshots' in game['images'])
			game['images']['screenshots'].forEach(image => {
				$('div#screenshots').append(`
					<a href='assets/games/${id}/images/${image}'><div><img src='assets/games/${id}/images/${image}'/></div></a>
				`);
			});

		game['platforms'].forEach(platform => {
			if (platform['platform'] == 'windows') $('div#platforms').append(`<a href='${platform['link']}'><div><i class="fab fa-windows"></i><br><br><span>Windows 7/8/10</span></div></a>`);
			if (platform['platform'] == 'linux') $('div#platforms').append(`<a href='${platform['link']}'><div><i class="fab fa-linux"></i><br><br><span>Linux</span></div></a>`);
			if (platform['platform'] == 'mac') $('div#platforms').append(`<a href='${platform['link']}'><div><i class="fab fa-apple"></i><br><br><span>Mac</span></div></a>`);
			if (platform['platform'] == 'android') $('div#platforms').append(`<a href='${platform['link']}'><div><i class="fab fa-android"></i><br><br><span>Android</span></div></a>`);
			if (platform['platform'] == 'ios') $('div#platforms').append(`<a href='${platform['link']}'><div><i class="fab fa-app-store-ios"></i><br><br><span>iOS</span></div></a>`);
			if (platform['platform'] == 'browser') $('div#platforms').append(`<a href='${platform['link']}'><div><i class="fas fa-globe"></i><br><br><span>Browser</span></div></a>`);
		});

		game['built-with'].forEach(tool => {
			$('div#built-with').append(`
				<a href="#">
					<div>
						${tool['icon']}<br><br>
						<span>${tool['tool']}</span>
					</div>
				</a>
			`);
		});

		game['tags'].forEach(tag => {
			$('div#tags').append(`<input type='submit' value='${tag}'/>`);
		});
	});
}


window.onload = function() {
	let params = getUrlParameters(window.location.search);
	loadGameData(params['g']);
	$('body').show();
	Hackerspace.onload();
}

window.onscroll = function() {
	Hackerspace.onscroll();
}
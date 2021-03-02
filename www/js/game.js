
const loadGameData = function (id, callback) {
	$.get(`assets/games/${id}/data.json`, function(game) {
		$(document).attr('title', `${game['title']} - Hackerspace IFUSP`);
		$('header').css('background-image', `url('assets/games/${id}/thumb.jpg')`);
		$('header h1').html(game['title']);
		$('div.gameinfo div.info div.thumb').append(`<img src='assets/games/${id}/thumb.jpg'>`);

		$('div#general-info').append(`
			<h2>${game['title']}</h2><br>
			<span>${game['year']}</span><br><br>
			<p>${game['description']}</p><br>
		`);

		if ('links' in game) {
			$('div#general-info').append('<ul id="links"></ul>');
			for (let link in game['links'])
				$('ul#links').append(`
					<a href='${game['links'][link]['link']}'>
						<li>
							<img src='images/icons/${link}.png'/>
							<p>${game['links'][link]['text']}</p>
						</li>
					</a>
				`);
		}

		
		if ('developers' in game) {
			game['developers'].forEach(dev => {
				$('div#devs ul').append(`
					<li>
						<span>${dev['name']}</span>
						<p>${dev['role']}</p>
					</li>
				`); 
			});
		} else
			$('div#devs').hide();

		if ('screenshots' in game['images']) {
			game['images']['screenshots'].forEach(image => {
				$('div#screenshots').append(`
					<a href='assets/games/${id}/images/${image}'><div><img src='assets/games/${id}/images/${image}'/></div></a>
				`);
			});
		} else
			$('div.screenshots').hide();

		if ('platforms' in game) {
			game['platforms'].forEach(platform => {
				if (platform['platform'] == 'windows') $('div#platforms').append(`<a href='${platform['link']}'><div><i class="fab fa-windows"></i><br><br><span>Windows 7/8/10</span></div></a>`);
				if (platform['platform'] == 'linux') $('div#platforms').append(`<a href='${platform['link']}'><div><i class="fab fa-linux"></i><br><br><span>Linux</span></div></a>`);
				if (platform['platform'] == 'mac') $('div#platforms').append(`<a href='${platform['link']}'><div><i class="fab fa-apple"></i><br><br><span>Mac</span></div></a>`);
				if (platform['platform'] == 'android') $('div#platforms').append(`<a href='${platform['link']}'><div><i class="fab fa-android"></i><br><br><span>Android</span></div></a>`);
				if (platform['platform'] == 'ios') $('div#platforms').append(`<a href='${platform['link']}'><div><i class="fab fa-app-store-ios"></i><br><br><span>iOS</span></div></a>`);
				if (platform['platform'] == 'browser') $('div#platforms').append(`<a href='${platform['link']}'><div><i class="fas fa-globe"></i><br><br><span>Browser</span></div></a>`);
			});
		} else
			$('div.platforms').hide();

		if ('built-with' in game) {
			$.get('assets/tools.json', function(data) {
				game['built-with'].forEach(tool => {
					$('div#built-with').append(`
						<a href='${data['tools'][tool]['link']}'>
							<div>
								${data['tools'][tool]['icon']}<br><br>
								<span>${data['tools'][tool]['name']}</span>
							</div>
						</a>
					`);
				});
			});
		} else
			$('div.built-with').hide();

		if ('instructions' in game) {
			$.get(`assets/games/${id}/${game['instructions']}`, function(data) {
				$('div#guide').append(data);
			});
		} else
			$('div.guide').hide();

		game['tags'].forEach(tag => {
			$('div#tags').append(`<input type='submit' value='${tag}'/>`);
		});
	
		callback();
	});
}


window.onload = function() {
	let params = getUrlParameters(window.location.search);
	loadGameData(params['g'], () => {
		$('body').show();
		Hackerspace.onload();
	});
}

window.onscroll = function() {
	Hackerspace.onscroll();
}
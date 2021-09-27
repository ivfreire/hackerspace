
window.onload = function() {
	$('header div.text').hide();

	$('body').show();
	$('header div.text').fadeIn(500);

	if (window.innerWidth <= 800)
		$('div#about div.image').height( $('div#about div.image').width() );

		Hackerspace.onload();
}

window.onscroll = () => {
	

	Hackerspace.onscroll();
}
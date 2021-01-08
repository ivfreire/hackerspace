var month = ['JAN', 'FEV', 'MAR', 'ABR', 'MAI', 'JUN', 'JUL', 'AGO', 'SET', 'OUT', 'NOV', 'DEZ'];

var Hackerspace = {
	init: () => {
		particlesJS.load('particles-js', 'assets/particles.json', function() {
			console.log('callback - particles.js config loaded');
		});
	}
}
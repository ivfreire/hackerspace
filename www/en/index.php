<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="O Hackerspace da Física é um ambiente propício ao desenvolvimento de novos projetos e tecnologias dentro do Instituto de Física da USP."/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Hackerspace IFUSP</title>
		<link rel="stylesheet" href="../css/style.css"/>
		<link rel="stylesheet" href="../css/index.css"/>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	</head>
	<body>

		<nav role="navigation" class="navigation">
			<div class="wrapper">
				<div class="menu">
					<a class="bars" onclick="$('div.menu-btn').slideToggle(300);"><i class="fas fa-bars"></i></a>
					<a class="title" href="index.php">Hackerspace</a>
					<div class="hide-btn menu-btn">
						<a href="events.php">Events</a>
						<a href="info.html">Info</a>
					</div>
					<div class="right">
						<a class="status closed" title="O Hackerspace está fechado atualmente."><i class="fas fa-door-closed"></i></a>
						<a class="hide-btn" href="../">Português</a>
						<a><i class="fas fa-search"></i></a>
					</div>
				</div>
			</div>
		</nav>

		<header>
			<div id="particles-js"></div>
			<div class="text">
				<div class="wrapper">
					<h1>Hackerspace</h1>
					<h4>Even more than a <b>space</b>.<br>A <b>community</b>.</h4>
				</div>
			</div>
			<div class="social">
				<div class="wrapper">
					<a href="https://facebook.com/hackerspace.ifusp" target="_blank" rel="noopener noreferrer" title="Facebook">
						<i class="fab fa-facebook-square"></i>
					</a>
					<a href="https://github.com/ivfreire/hackerspace" target="_blank" rel="noopener noreferrer" title="Github">
						<i class="fab fa-github-square"></i>
					</a>
					<a href="https://www.youtube.com/channel/UCk59MC1ylz1vRz8xIPoxnyA" target="_blank" rel="noopener noreferrer" title="YouTube">
						<i class="fab fa-youtube-square"></i>
					</a>
				</div>
			</div>
			<div class="indicator"><i class="fas fa-chevron-down"></i></div>
		</header>

		<div class="page">
			<div class="stack">

				<div class="element gray" id="intro">
					<div class="wrapper">
						<div class="panel presents" id="goals">
							<div class="item">
								<div class="icon"><i class="fas fa-globe-americas"></i></div>
								<div class="title"><h2>Hello world!</h2></div>
								<div class="text">
									<p><b>Hackerspaces</b> are community-operated physical places, where people share their interest in tinkering with technology, meet and work on their projects, and learn from each other.</p>
								</div>
							</div>
							<div class="item">
								<div class="icon"><i class="fas fa-code"></i></div>
								<div class="title"><h2>Develop</h2></div>
								<div class="text">
									<p>Technology has shaped the way we live, it is of paramount importance to learn the language of the machines to create new and better solutions and world-changing technologies.</p>
								</div>
							</div>
							<div class="item">
								<div class="icon"><i class="fas fa-shapes"></i></div>
								<div class="title"><h2>Build</h2></div>
								<div class="text">
									<p>Apply your solutions to the world in a practical way, creating and tinkering with hardware, electronic components and micro-controllers. Build all sorts of curious and interesting contraptions.</p>
								</div>
							</div>
							<div class="item">
								<div class="icon"><i class="fas fa-share-alt"></i></div>
								<div class="title"><h2>Connect</h2></div>
								<div class="text">
									<p>Meet and connect to new people with stunning tech and science background, discuss new technologies and engage on a community project to show off your work and learn from others.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="element light" id="highlight">
					<div class="wrapper">
						<div class="panel">
							<!-- <div class="title" style="text-align: left;">
								<h2>Em destaque</h2>
							</div> -->
							<div class="content">
								<div class="highlights" id="highlights">
									<a href="https://revistapesquisa.fapesp.br/espaco-livre-para-criar/?cat=tecnologia/" rel="nopener norefferer" target="_blank">
										<div class="highlight">
											<div class="info">
												<div>
													<h2>A free space for creativity.</h2><br>
													<p>Hackerspace IFUSP spotted by FAPESP periodical.</p><br>
												</div>
											</div>
											<div class="image">
												<img class="background" src="../assets/highlights/hackerspace_fapesp.jpg" alt="hackerspace, impressora 3d">
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="element light" id="extension">
					<div class="wrapper">
						<div class="panel">
							<!-- <div class="title">
								<h2>Atividades de Extensão</h2>
							</div> -->
							<div class="content">
								<div id="activities">
									<div class="holder">
										<div id="courses">
											<div>
												<div class="image">
													<i class="fas fa-university"></i>
												</div>
												<div class="text">
													<div class="title">
														<h2>Classes and Workshops</h2>
													</div>
													<div class="content">
														<p>We gather skilled people from the academic community with strong background in tech to teach classes and offer workshops hosted in the <b>Hackerspace</b>. We strongly support the sharing of precious knowlegge across our community.</p>
														<div class="more">
															<a href="events.php">Learn more <i class="fas fa-chevron-right"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="robotics">
											<div>
												<div class="image">
													<i class="fas fa-robot"></i>
												</div>
												<div class="text">
													<div class="title">
														<h2>Robotics</h2>
													</div>
													<div class="content">
														<p>Our recently gathered team of robotics is composed of students who wants to build something meaningful meanwhile having a great learning experience and a good source of entertainment. We hope to engage more students in this project and bring new ideas to the stage.</p>
														<div class="more">
															<!-- <a href="robotics.html">Saiba mais <i class="fas fa-chevron-right"></i></a> -->
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="gamedev">
											<div>
												<div class="bg">
													<div class="image">
														<i class="fas fa-gamepad"></i>
													</div>
												</div>
												<div class="text">
													<div class="title">
														<h2>Game Development</h2>
													</div>
													<div class="content">
														<p>Most exciting of all, we built a team of students focused on the development of electronic video-games, from concept art to coding, we cover it all. This idea is prospective due to the level of engagement we expect from the community and the several ways it can contribute to research, teaching and scientific dissemination across society.</p>
														<div class="more">
															<a href="gamedev.php">Learn more <i class="fas fa-chevron-right"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<footer>
			<div class="lowermenu">
				<div class="wrapper">
					<div class="menu">
						<div>
							<div>
								<ul>
									<li class="title"><i class="fas fa-door-open"></i> Access</li>
									<li><a href="info.html#access">Students</a></li>
									<li><a href="info.html#access">Members</a></li>
									<li><a href="info.html#access">Non-related to the USP</a></li>
								</ul>
							</div>
							<div>
								<ul>
									<li class="title"><i class="fas fa-globe"></i> Network</li>
									<li><a href="https://facebook.com/hackerspace.ifusp">Facebook</a></li>
									<li><a href="https://github.com/ivfreire/hackerspace">GitHub</a></li>
									<li><a href="https://www.youtube.com/channel/UCk59MC1ylz1vRz8xIPoxnyA">YouTube</a></li>
								</ul>
							</div>
							<div>
								<ul>
									<li class="title"><i class="fas fa-star"></i> Extension</li>
									<li><a href="events.php#courses">Classes</a></li>
									<li><a href="events.php#workshops">Workshops</a></li>
									<li><a href="robotics.html">Robotics</a></li>
									<li><a href="gamedev.php">Game Development</a></li>
								</ul>
							</div>
							<div>
								<ul>
									<li class="title"><i class="fas fa-info-circle"></i> Info</li>
									<li><a href="http://portal.if.usp.br/ifusp/">Institute of Physics</a></li>
									<li><a href="http://usp.br/">USP</a></li>
									<li><a href="http://cefisma.org.br/">CEFISMA</a></li>
									<li><a href="info.html#contact">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="logos">
						<div class="holder">
							<img src="../images/icons/ifusp.png" alt="IFUSP" title="Instituto de Física da USP" class="logo" id="ifusp">
						</div>
					</div>
				</div>
			</div>
			<div class="bottom">
				<div class="wrapper">
					<p>Room 1013, Institute of Physics of the USP - Main Building<br>R. do Matão, 1371 - University Town - Butantã - São Paulo, Brazil</p>
				</div>
			</div>
		</footer>

	</body>

	<script src="../js/fontawesome.js"></script>
	<script src="../js/jquery.js"></script>
	<script src="../js/particles.min.js"></script>
	<script src="../js/script.js"></script>
	<script src="../js/index.js"></script>
	<script>
		particlesJS.load('particles-js', '../assets/particles.json', function() {
			console.log('callback - particles.js config loaded');
		});
	</script>
</html>

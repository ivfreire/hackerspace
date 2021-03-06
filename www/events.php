<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Eventos, cursos, oficinas e palestras que acontecem no Hackerspace IFUSP."/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Hackerspace IFUSP - Eventos</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/events.css"/>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	</head>
	<body>

		<nav role="navigation" class="navigation">
			<div class="wrapper">
				<div class="menu">
					<a class="bars" onclick="$('div.menu-btn').slideToggle(300);"><i class="fas fa-bars"></i></a>
					<a class="title" href="index.php">Hackerspace</a>
					<div class="hide-btn menu-btn">
						<a href="events.php" class="active">Eventos</a>
						<a href="info.html">Informações</a>
					</div>
					<div class="right">
						<a class="status closed" title="O Hackerspace está fechado atualmente."><i class="fas fa-door-closed"></i></a>
						<a class="active hide-btn">PT</a>
						<!-- <a class="hide-btn" href="/en-US">EN</a> -->
						<a><i class="fas fa-search"></i></a>
					</div>
				</div>
			</div>
		</nav>

		<header>
			<div class="text">
				<div class="wrapper">
					<h1>Hackerspace</h1>
					<h4><b>Eventos</b></h4>
				</div>
			</div>
			<div class="indicator"><i class="fas fa-chevron-down"></i></div>
		</header>

		<div class="page">
			<div class="stack">

				<div class="element light" id="recent">
					<div class="wrapper">
						<div class="panel">
							<div class="title">
								<h2>Recentemente, no Hackerspace...</h2>
							</div>
							<div class="content">
								<div>
									<div class="highlights" id="recents">
										<?php
											$events = json_decode(file_get_contents('assets/events/events.json'), true);
											$events = $events['events'];
											$event = $events[count($events) - 1];
											echo "
												<div class='highlight'>
													<div class='info'>
														<div>
															<h2>".$event['title']."</h2><br>
															<span>".$event['date']."</span><br><br>
															<p>".$event['description']."</p>
														</div>
													</div>
													<div class='image'>
														<img src='assets/events/".$event['id']."/thumb.jpg'/>
													</div>
												</div>
											";
										?>
									</div>
									<div class="boxes" id="recents">
										<?php
											for($i = count($events) - 2; $i > count($events) - 5; $i--) {
												$event = $events[$i];
												echo "
													<div class='box'>
														<div class='image'>
															<img src='assets/events/".$event['id']."/thumb.jpg'/>
														</div>
														<div class='text'>
															<h2>".$event['title']."</h2><br>
															<span>".$event['date']."</span><br><br>
															<p>".$event['description']."</p>
														</div>
													</div>
												";
											}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="element light" id="intro" style="padding-top: 0;">
					<div class="wrapper">
						<div class="panel presents" id="intro">
							<div class="item">
								<div class="icon"><i class="fas fa-tools"></i></div>
								<div class="title"><h2>Oficinas</h2></div>
								<div class="text">
									<p>Oficinas no <b>Hackerspace</b> são eventos práticos que ensinam novas tecnologias e técnicas para a comunidade. Eletrônica, análise de dados, bibliotecas, <i>software</i> são alguns entre muitas coisas ensinadas.</p>
								</div>
							</div>
							<div class="item">
								<div class="icon"><i class="fas fa-university"></i></div>
								<div class="title"><h2>Cursos</h2></div>
								<div class="text">
									<p>Além de oficinas práticas, o <b>Hackerspace</b> também oferece cursos de curto prazo para a comunidade acadêmica.</p>
								</div>
							</div>
							<div class="item">
								<div class="icon"><i class="fas fa-sun"></i></div>
								<div class="title"><h2>Cursos de Verão</h2></div>
								<div class="text">
									<p>Todo verão o Instituto de Física oferece cursos de férias para os alunos da Universidade, o <b>Hackerspace</b> também faz parte disso, oferecendo cursos e disponibilizando o local para palestrantes.</p>
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
									<li class="title"><i class="fas fa-door-open"></i> Acesso</li>
									<li><a href="info.html#access">Alunos</a></li>
									<li><a href="info.html#access">Membros</a></li>
									<li><a href="info.html#access">Sem vínculo universitário</a></li>
								</ul>
							</div>
							<div>
								<ul>
									<li class="title"><i class="fas fa-globe"></i> Redes</li>
									<li><a href="https://facebook.com/hackerspace.ifusp">Facebook</a></li>
									<li><a href="https://github.com/ivfreire/hackerspace">GitHub</a></li>
									<li><a href="https://www.youtube.com/channel/UCk59MC1ylz1vRz8xIPoxnyA">YouTube</a></li>
								</ul>
							</div>
							<div>
								<ul>
									<li class="title"><i class="fas fa-star"></i> Extensão</li>
									<li><a href="events.php#courses">Cursos</a></li>
									<li><a href="events.php#workshops">Oficinas</a></li>
									<li><a href="robotics.html">Grupo de robótica</a></li>
									<li><a href="gamedev.php">Gamedev</a></li>
								</ul>
							</div>
							<div>
								<ul>
									<li class="title"><i class="fas fa-info-circle"></i> Informações</li>
									<li><a href="http://portal.if.usp.br/ifusp/">Instituto de Física</a></li>
									<li><a href="http://usp.br/">USP</a></li>
									<li><a href="http://cefisma.org.br/">CEFISMA</a></li>
									<li><a href="info.html#contact">Contato</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="logos">
						<div class="holder">
							<img src="images/icons/ifusp.png" alt="IFUSP" title="Instituto de Física da USP" class="logo" id="ifusp">
						</div>
					</div>
				</div>
			</div>
			<div class="bottom">
				<div class="wrapper">
					<p>Sala 1013, Instituto de Física da USP - Prédio Principal<br>R. do Matão, 1371 - Cid. Universitária - Butantã - São Paulo, SP</p>
				</div>
			</div>
		</footer>

	</body>

	<script src="js/fontawesome.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
	<script src="js/events.js"></script>
</html>

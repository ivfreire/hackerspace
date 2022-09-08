<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="O Hackerspace IFUSP é um laboratório aberto ao público no Instituto de Física da USP. É um dos primeiros hackerspaces do Brasil atualmente, localizado no bairro do Butantã, na cidade de São Paulo."/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="google-site-verification" content="U8f5wnlNCiLO8B9--r-Irq0sg3EiM0unoGiqNFEMmoU" />
		<title>Hackerspace</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/index.css"/>
		<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
	</head>
	<body>

		<?php include('templates/nav-bar.php'); ?>

		<header>
			<div id="particles-js"></div>
			<div class="text">
				<div class="wrapper">
					<div>
						<h1>Hackerspace</h1>
						<h4>Muito mais que um <b>espaço</b>. Uma <b>comunidade</b>.</h4>
					</div>
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
								<div class="title"><h2>Olá, mundo!</h2></div>
								<div class="text"><p>O <b>Hackerpace</b> é um laboratório de tecnologia aberto à comunidade no Instituto de Física da USP.</p></div>
							</div>
							<div class="item">
								<div class="icon"><i class="fas fa-code"></i></div>
								<div class="title"><h2>Desenvolver</h2></div>
								<div class="text"><p>O objetivo do <b>Hackerpace</b> é desenvolver projetos relacionados à ciência e tecnologia.</p></div>
							</div>
							<div class="item">
								<div class="icon"><i class="fas fa-shapes"></i></div>
								<div class="title"><h2>Construir</h2></div>
								<div class="text"><p>O <b>Hackerspace</b> dispõe de equipamentos, peças e ferramentas para montar projetos.</p></div>
							</div>
							<div class="item">
								<div class="icon"><i class="fas fa-share-alt"></i></div>
								<div class="title"><h2>Conectar</h2></div>
								<div class="text"><p>O <b>Hackerspace</b> é um espaço aberto à workshops, cursos e outros eventos promovidos pela comunidade.</p></div>
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
													<h2>Espaço livre para criar.</h2><br>
													<p>Hackerspace IFUSP em destaque na revista FAPESP.</p><br>
												</div>
											</div>
											<div class="image">
												<img class="background" src="assets/highlights/hackerspace_fapesp.jpg" alt="hackerspace, impressora 3d">
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="element light">
					<div class="wrapper">
						<div class="panel">
							<div class="content">
								<div class="presents" id="intro">
									<div class="item">
										<div class="icon">
											<i class="fas fa-robot"></i>
										</div>
										<div class="title">
											<h2>Hackerspace</h2>
										</div>
										<div class="text">
											<p><b>Hackerspaces</b>, também conhecidos como makerspaces, são laboratórios onde profissionais da tecnologia, estudantes e entusiastas se reúnem para trabalhar em projetos relacionados à eletrônica, tecnologia, desenvolvimento de software e ciência.</p>
										</div>
									</div>
									<div class="item">
										<div class="icon">
											<i class="fas fa-atom"></i>
										</div>
										<div class="title">
											<h2>Instituto de Física</h2>
										</div>
										<div class="text">
											<p>O <b>Hackerspace IFUSP</b> é associado à Universidade de São Paulo e é um dos primeiros hackerspaces do Brasil. Foi fundado em 2018 pelo Prof. Dr. Alexandre Suaide que trouxe essa ideia de universidades norte-americanas. O espaço tem uma proposta inovadora que contrasta com a natureza teórica acadêmica do Instituto.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="element light" style="padding-top: 0; padding-bottom: 0;">
					<div class="wrapper">
						<div class="panel">
							<div class="content">
								<div class="container" id="coffee">
									<div class="left"><img src="images/misc/cafe.jpg" alt="cafe no hackerspace"/></div>
									<div class="right">
										<span class="large">Um <span>espaço</span> para grandes <span>ideias</span>.<br>(e café!)</span><br><br>
										<span class="medium">Preparo do café no HS</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="element light" id="lately" style="padding-bottom: 0;">
					<div class="wrapper">
						<div class="panel">
							<div class="title"><h2>Eventos recentes</h2></div>
							<div class="content">
								<div id="lately">
									<div class="holder">
										<?php
											$events = json_decode(file_get_contents('assets/events/events.json'), true);
											$events = $events['events'];
											for($i = count($events) - 1; $i > count($events) - 5; $i--) {
												$event = $events[$i];
												echo "
													<div class='box'>
														<div class='image'><img src='assets/events/".$event['id']."/thumb.jpg'/></div>
														<div class='text'>
															<h2>".$event['title']."</h2>
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

				<div class="element light" id="extension">
					<div class="wrapper">
						<div class="panel">
							<div class="title">
								<h2>Atividades de Extensão</h2>
							</div>
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
														<h2>Cursos e Oficinas</h2>
													</div>
													<div class="content">
														<p>O <b>Hackerspace</b> reune pessoas dispostas a dividir seus conhecimentos com a comunidade para organizar cursos e oficinas no espaço.</p>
														<div class="more">
															<a href="events.php">Saiba mais <i class="fas fa-chevron-right"></i></a>
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
														<h2>Grupo de Robótica</h2>
													</div>
													<div class="content">
														<p>O grupo de robótica explora as possibilidades de construção de robôs com Arduinos e componentes eletrônicos.</p>
														<div class="more">
															<a href="#">Em breve</a>
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
														<h2>Grupo de GameDev</h2>
													</div>
													<div class="content">
														<p>Recentemente criado, o grupo de Gamedev do <b>Hackerspace</b> é formado por alunos interessados no desenvolvimento de jogos eletônicos para múltiplas plataformas.</p>
														<div class="more">
															<a href="gamedev.php">Saiba mais <i class="fas fa-chevron-right"></i></a>
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

		<?php include('templates/footer.php'); ?>

	</body>

	<script src="js/fontawesome.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/particles.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/index.js"></script>
</html>

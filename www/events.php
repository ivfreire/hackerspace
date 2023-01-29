<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Eventos, cursos, oficinas e palestras que acontecem no Hackerspace IFUSP."/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Eventos</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/events.css"/>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	</head>
	<body>

		<?php include('templates/nav-bar.php'); ?>

		<header>
			<div class="text">
				<div class="wrapper">
					<h1>Eventos</h1>
				</div>
			</div>
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
								<div class="text"><p>As oficinas no <b>Hackerspace</b> são eventos práticos que ensinam o uso de novas tecnologias para a comunidade acadêmica. Eletrônica, análise de dados, bibliotecas, <i>software</i> são alguns entre muitas coisas ensinadas.</p></div>
							</div>
							<div class="item">
								<div class="icon"><i class="fas fa-university"></i></div>
								<div class="title"><h2>Cursos</h2></div>
								<div class="text"><p>Além de oficinas práticas, o <b>Hackerspace</b> também oferece cursos de curto prazo para a comunidade acadêmica.</p></div>
							</div>
							<div class="item">
								<div class="icon"><i class="fas fa-sun"></i></div>
								<div class="title"><h2>Cursos de Verão</h2></div>
								<div class="text"><p>Todo verão o Instituto de Física oferece cursos de férias para os alunos da Universidade, o <b>Hackerspace</b> também participa disso, oferecendo cursos e disponibilizando o local para alunos e professores palestrantes.</p></div>
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
	<script src="js/script.js"></script>
	<script src="js/events.js"></script>
</html>

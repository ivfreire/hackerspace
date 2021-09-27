<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Informações sobre o Hackerspace da Física."/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Informações</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/info.css"/>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	</head>
	<body>

		<?php include('templates/nav-bar.php'); ?>

		<header>
			<div class="text">
				<div class="wrapper">
					<h1>Informações</h1>
				</div>
			</div>
		</header>

		<div class="page">
			<div class="stack">

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
											<p><b>Hackerspaces</b> são laboratórios físicos mantidos pela comunidade onde profissionais, estudantes e entusiastas da ciência e tecnologia se reúnem para compartilhar experiências, conhecer novas pessoas da área e trabalhar em projetos conjuntos.</p>
										</div>
									</div>
									<div class="item">
										<div class="icon">
											<i class="fas fa-atom"></i>
										</div>
										<div class="title">
											<h2>Instituto de Física da USP</h2>
										</div>
										<div class="text">
											<p>O <b>Hackerspace IFUSP</b> é associado à Universidade de São Paulo e é um dos primeiros hackerspaces do Brasil. Foi fundado em 2018 pelo Prof. Dr. Alexandre Suaide e alguns geniosos alunos da graduação. O espaço tem uma proposta inovadora que contrasta com a natureza teórica acadêmica da Universidade.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="element light" style="padding-top: 0;">
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

				<div class="element light" id="access" style="padding-top: 0;">
					<div class="wrapper">
						<div class="panel">
							<div class="content">
								<div class="panel presents" id="access">
									<div class="item">
										<div class="title"><h2>Alunos</h2></div>
										<div class="text">
											<p>Alunos da Universidade podem frequentar o <b>Hackerspace</b> sempre que estiver aberto.</p>
										</div>
									</div>
									<div class="item">
										<div class="title"><h2>Membros</h2></div>
										<div class="text">
											<p>Membros são alunos que possuem permissão para abrir o <b>Hackerspace</b>, eles têm acesso irrestrito.</p>
										</div>
									</div>
									<div class="item">
										<div class="title"><h2>Sem vínculo universitário</h2></div>
										<div class="text">
											<p>O acesso de pessoas desvinculadas à Universidade ao prédio principal do Instituto é controlado. Para entrar, é preciso fazer um registro na recepção do Instituto.</p>
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
	<script src="js/info.js"></script>
</html>

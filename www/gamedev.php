<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Página principal do grupo de GameDev do Hackerspace IFUSP."/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Gamedev - Hackerspace</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/gamedev.css"/>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	</head>
	<body>

		<?php include('templates/nav-bar.php'); ?>

		<header>
			<div class="text">
				<div class="wrapper">
					<h1>Gamedev</h1>
				</div>
			</div>
		</header>

		<div class="page">
			<div class="stack">

				<div class="element dark">
					<div class="wrapper">
						<div class="panel presents" id="intro">
							<div class="item">
								<div class="icon"><i class="fas fa-gamepad"></i></div>
								<div class="title"><h2>Gamedev</h2></div>
								<div class="text">
									<p>O grupo de Gamedev recém formado do <b>Hackerspace</b> é composto por alunos interessados no desenvolvimento de jogos digitais.</p>
								</div>
							</div>
							<div class="item">
								<div class="icon"><i class="fas fa-question-circle"></i></div>
								<div class="title"><h2>Contribuições</h2></div>
								<div class="text">
									<p>Jogos digitais têm um impacto imenso sobre a didática no ensino e divulgação científica para o público geral.</p>
								</div>
							</div>
							<div class="item">
								<div class="icon"><i class="fas fa-tools"></i></i></div>
								<div class="title"><h2>Ferramentas</h2></div>
								<div class="text">
									<p>Nós priorizamos o uso de ferramentas e <i>softwares</i> open-source no processo de desenvolvimento. Porém programas proprietários também são usados sem problemas.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="element darker">
					<div class="wrapper">
						<div class="panel">
							<div class="title">
								<h2>Ferramentas</h2>
							</div>
							<div class="content">
								<div id="tools">
									<a href="https://www.gimp.org/">
										<div>
											<div class="image"><img src="images/icons/gimp.png" alt="gimp logo"></div>
											<div class="title"><h3>GIMP</h3></div>
											<div class="text"><p>Gimp é uma ótima ferramenta para edição e manipulação de imagens.</p></div>
										</div>
									</a>
									<a href="https://blender.org/">
										<div>
											<div class="image"><img src="images/icons/blender.png" alt="blender logo"></div>
											<div class="title"><h3>Blender</h3></div>
											<div class="text"><p>Blender é um software de modelagem e renderização 3D, perfeito pra jogos mais complexos.</p></div>
										</div>
									</a>
									<a href="https://godotengine.org/">
										<div>
											<div class="image"><img src="images/icons/godot.png" alt="godot logo"></div>
											<div class="title"><h3>Godot</h3></div>
											<div class="text"><p>Godot é uma <i>Game Engine</i> open-source que suporta jogos 2D e 3D.</p></div>
										</div>
									</a>
									<a href="https://code.visualstudio.com">
										<div>
											<div class="image"><img src="images/icons/vscode.png" alt="vscode logo"></div>
											<div class="title"><h3>Code</h3></div>
											<div class="text"><p>O VS Code é um editor de texto open-source desenvolvido pela Microsoft baseado na IDE Visual Studio.</p></div>
										</div>
									</a>
								</div>
								<div class="highlights" id="feat">
									<a href="assets/res" taget="_blank">
										<div class="highlight icon">
											<div class="info">
												<div>
													<h2>Galeria de Recursos</h2><br>
													<p>Recursos como imagens, texturas, modelos 3d e mais que foram utilizados nos títulos do <b>Hackerspace</b>.</p>
												</div>
											</div>
											<div class="image">
												<img class="background" src="images/misc/gamedev_assets.png" alt="icone de recursos">
											</div>
										</div>
									</a>
									<a href="#">
										<div class="highlight icon">
											<div class="info">
												<div>
													<h2>Coding</h2><br>
													<p>No processo de desenvolvimento de jogos programação e <i>coding</i> são muito importantes para escrever as mecânicas dos jogos e a lógica.</p>
												</div>
											</div>
											<div class="image">
												<img class="background" src="images/misc/gamedev_coding.png" alt="icone de programação">
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="element darker" style="padding-top: 0;">
					<div class="wrapper">
						<div class="panel" id="demo">
							<div class="title">
								<h2>Demo</h2>
							</div>
							<div class="content">
								<div class="left">
									<div class="holder">
										<iframe class="demo" src="//v6p9d9t4.ssl.hwcdn.net/html/3503202/index.html" frameborder="0" width="100%"></iframe>
									</div>
								</div>
								<div class="right">
									<h3>Hackerspace 2021</h3><br>
									<p>Bem vindxs ao Hackerspace 2021!<br><br>O Hackerspace IFUSP é um laboratório aberto à comunidade acadêmica da Universidade. Localizado no prédio principal do Instituto de Física da USP.<br><br>Em 2021, o espaço não pôde ser aberto devido às restrições sanitárias causadas pela pandemia de COVID-19, porém, o HS decidiu fazer uma cerimônia de recepção dos calouros de 2021 online.<br><br>O projeto para 2021 é um curso de Gamedev online ofericido por alunos da graduação, ao lado está um protótipo de uma jogo desenvolvido pela equipe do HS.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="element darker" style="padding-top: 0;">
					<div class="wrapper">
						<div class="panel">
							<div class="title">
								<h2>Em breve</h2>
							</div>
							<div class="content">
								<div class="highlights" id="coming-soon">
									<a href="#">
										<div class="highlight">
											<div class="info">
												<div>
													<h2>Curso de Gamedev</h2><br>
													<p>Curso de desenvolvimento de jogos digitais do <b>Hackerspace</b>.</p><br>
												</div>
											</div>
											<div class="image">
												<img class="background" src="images/misc/gamedev_course.png" alt="curso de gamedev do hackerspace">
											</div>
										</div>
									</a>
									<a href="#">
										<div class="highlight">
											<div class="info">
												<div>
													<h2>Hackerspace Game Jam</h2><br>
													<p>Competição de Gamedev do <b>Hackerspace</b>.</p><br>
												</div>
											</div>
											<div class="image">
												<img class="background" src="images/misc/gamejam_icon.png" alt="gamejam hackerspace">
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="element darker" style="padding-top: 0;">
					<div class="wrapper">
						<div class="panel">
							<div class="title">
								<h2>Títulos recentes</h2>
							</div>
							<div class="content">
								<div class="boxes" id="recents">
									<?php
										$games = json_decode(file_get_contents('assets/games/games.json'), true);
										$games = $games['games'];
										if (isset($games)) {
											for($i = count($games) - 1; $i > count($games) - 4; $i--) {
												echo "
													<a href='game.php?g=".$games[$i]['id']."'>
														<div class='box'>
															<div class='image'>
																<img src='assets/games/".$games[$i]['id']."/thumb.jpg'/>
															</div>
															<div class='text'>
																<h2>".$games[$i]['title']."</h2><br>
																<span>".$games[$i]['year']."</span><br><br>
																<p>".$games[$i]['description']."</p>
															</div>
														</div>
													</a>
												";
											}
										} else {
											echo "<span>Erro interno!</span>";
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="element darker" style="padding-top: 0;">
					<div class="wrapper">
						<div class="panel toggle">
							<div class="title">
								<h2>Todos os títulos<i class="indicator fas fa-bars"></i></h2>
							</div>
							<div class="content">
								<div id="all-titles">
									<?php
										$games = json_decode(file_get_contents('assets/games/games.json'), true);
										$games = $games['games'];
										if (isset($games)) {
											foreach($games as $game) {
												echo "
													<a href='game.php?g=".$game['id']."'>
														<div class='game'>
															<div class='thumb'>
																<img src='assets/games/".$game['id']."/thumb.jpg'>
															</div>
															<div class='title'>
																<span>".$game['title']."</span>
															</div>
														</div>
													</a>
												";
											}
										} else {
											echo "<span>Erro interno!</span>";
										}
									?>
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
	<script src="js/script.js"></script>
	<script src="js/gamedev.js"></script>
</html>

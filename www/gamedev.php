<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Seção de desenvolvimento de jogos digitais (Gamedev) do Hackerspace da Física. No Instituto de Física da Universidade de São Paulo - IF-USP."/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Hackerspace IFUSP - Gamedev</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/gamedev.css"/>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	</head>
	<body>

		<nav role="navigation" class="navigation">
			<div class="wrapper">
				<div class="menu">
					<a class="bars" onclick="$('div.menu-btn').slideToggle(300);"><i class="fas fa-bars"></i></a>
					<a class="title" href="index.php">Hackerspace</a>
					<div class="hide-btn menu-btn">
						<a href="events.php">Eventos</a>
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
			<div class="shadow"></div>
			<div class="text">
				<div class="wrapper">
					<h4><b>Hackerspace</b></h4>
					<h1>Gamedev</h1>
				</div>
			</div>
			<div class="indicator"><i class="fas fa-chevron-down"></i></div>
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
								<div class="title"><h2>Contribuições?</h2></div>
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
									<p></p>
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
	<script src="js/gamedev.js"></script>
</html>

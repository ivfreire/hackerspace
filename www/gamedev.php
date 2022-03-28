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
					<span>HS Gamedev</span>
					<h1>Crie e explore novos universos.</h1>
					<p>O <b>HSGD</b> é um projeto de extensão universitária dedicado ao desenvolvimento de jogos digitais e ligado ao <b>Hackerspace</b> IFUSP.</p>
					<div class="buttons">
						<button>Nossa biblioteca</button>
						<button>Faça parte!</button>
					</div>
				</div>
			</div>
		</header>

		<div class="page">
			<div class="stack">	

				<div class="element darker">
					<div class="wrapper">
						<div class="panel presents" id="intro">
							<div class="item" id="gamedev">
								<div class="icon"><i class="fas fa-gamepad"></i></div>
								<div class="title"><h2>Gamedev</h2></div>
								<div class="text">
									<p>Somos um grupo de alunos de graduação e pós-graduação interessados no desenvolvimento de jogos digitais.</p>
								</div>
							</div>
							<div class="item" id="contribution">
								<div class="icon"><i class="fas fa-question-circle"></i></div>
								<div class="title"><h2>Contribuições</h2></div>
								<div class="text">
									<p>Jogos são mídias interativas poderosas que podem ser usadas nas áreas de educação, divulgação e pesquisa.</p>
								</div>
							</div>
							<div class="item" id="tools">
								<div class="icon"><i class="fas fa-tools"></i></i></div>
								<div class="title"><h2>Ferramentas</h2></div>
								<div class="text">
									<p>As ferramentas de Gamedev são bem diversas. Há muitas opções. No HSGV priorizamos o uso de tecnologias <i>open-source</i>.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="element darker" style="padding-top: 0;">
					<div class="wrapper">
						<div class="panel presents" id="recents">
							<!-- <div class="title"><h2>Títulos recentes</h2></div> -->
							<div class="content">
								<?php
									$games = json_decode(file_get_contents('assets/games/games.json'), true);
									$games = $games['games'];
									if (isset($games)) {
										for ($i = count($games) - 1; $i > count($games) - 5; $i--) {
											echo "
												<a href='game.php?g=".$games[$i]['id']."'>
													<div class='item' title='".$games[$i]['title']."'>
														<div class='image'><img src='assets/games/".$games[$i]['id']."/thumb.jpg'></div>
													</div>
												</a>
											";
										}
									}
								?>
							</div>
						</div>
					</div>
				</div>

				<div class="element dark" id="team">
					<div class="wrapper">
						<div class="panel">
							<div class="title"><h2>Equipe</h2><br><p>Alunos que fazem parte do grupo de GameDev</p></div>
							<div class="content">
								<div id="team-wall">
									<?php
										$devs = json_decode(file_get_contents('assets/team.json'), true);
										$devs = $devs['team'];
										if (isset($devs)) {
											foreach ($devs as $dev) {
												echo "
													<a href='https://twitter.com/".$dev['twitter']."'>
														<div class='dev' title='".$dev['name']."'>
															<img src='assets/team/".$dev['id'].".png'/>
															<span>".$dev['id']."</span>
															<span>".$dev['name']."</span>
														</div>
													</a>
												";
											}
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="element darker">
					<div class="wrapper">
						<div class="panel">
							<div class="content">

							</div>
						</div>
					</div>
				</div>

				<!--
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
				-->

			</div>
		</div>

		<?php include('templates/footer.php'); ?>

	</body>

	<script src="js/fontawesome.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
	<script src="js/gamedev.js"></script>
</html>

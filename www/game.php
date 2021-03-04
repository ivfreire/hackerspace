<?php
	if (isset($_GET['g'])) {
		$game_id = $_GET['g'];
		$game = json_decode(file_get_contents('assets/games/'.$game_id.'/data.json'), true);
		if (!isset($game)) {
			echo "<h1>Jogo não encontrado :/</h1><a href='gamedev.php'>voltar</a>";
			exit;
		}
	} else {
		echo "<h1>Jogo não encontrado :/</h1><a href='gamedev.php'>voltar</a>";
		exit;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="<?php echo $game['description'] ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title><?php echo $game['title']; ?></title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/gamedev.css"/>
		<link rel="stylesheet" href="css/game.css"/>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	</head>
	<body>

		<nav role="navigation" class="navigation">
			<div class="wrapper">
				<div class="menu">
					<a class="bars" onclick="$('div.menu-btn').slideToggle(300);"><i class="fas fa-bars"></i></a>
					<a class="title" href="index.html">Hackerspace</a>
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
			<?php echo "<img src='assets/games/".$game_id."/thumb.jpg'/>"; ?>
			<div class="shadow"></div>
			<div class="text">
				<div class="wrapper">
					<h4><b>Hackerspace</b></h4>
					<h1><?php echo $game['title']; ?></h1>
				</div>
			</div>
			<div class="indicator"><i class="fas fa-chevron-down"></i></div>
		</header>

		<div class="page">
			<div class="stack">

				<div class="element darker">
					<div class="wrapper">
						<div class="gameinfo">
							<div class="left">
								<div class="info">
									<div class="thumb">
										<img src="assets/games/<?php echo $game_id; ?>/thumb.jpg"/>
									</div>
									<div class="text">
										<div id="general-info">
											<h2><?php echo $game['title']; ?></h2><br>
											<span><?php echo $game['year'];?></span><br><br>
											<p><?php echo $game['description']; ?></p><br>
											<ul id="links">
												<?php
													foreach($game['links'] as $link => $data) {
														echo "
															<a href=".$data['link']." rel='noopener norefferer' target='_blank'>
																<li>
																	<img src='images/icons/".$link.".png'/>
																	<p>".$data['text']."</p>
																</li>
															</a>
														";
													}
												?>
											</ul>
										</div>
										<div id="devs">
											<h3>Desenvolvedores</h3><br>
											<ul>
												<?php
													foreach($game['developers'] as $dev) {
														echo "
															<li>
																<span>".$dev['name']."</span>
																<p>".$dev['role']."</p>
															</li>
														";
													}
												?>
											</ul>
										</div>
										<div id="tags">
											<h4>Tags</h4><br>
											<?php foreach($game['tags'] as $tag) echo "<input type='submit' value='".$tag."'/>"; ?>
										</div>
									</div>
								</div>
							</div>
							<div class="right">
								<div class="screenshots">
									<div class="panel box toggle">
										<div class="title">
											<h2>Screenshots<i class="indicator fas fa-bars"></i></h2>
										</div>
										<div class="content">
											<div id="screenshots">
												<?php
													if (isset($game['images']['screenshots'])) {
														foreach($game['images']['screenshots'] as $screenshot) {
															echo "
																<a href='assets/games/".$game_id."/images/".$screenshot."' target='_blank'>
																	<div>
																		<img src='assets/games/".$game_id."/images/".$screenshot."'/>
																	</div>
																</a>
															";
														}
													} else {
														echo "<span class='message'>Nenhuma imagem.</span>";
													}
												?>
											</div>
										</div>
									</div>
								</div>
								<div class="platforms">
									<div class="panel">
										<div class="title">
											<h2>Disponível para</h2>
										</div>
										<div class="content">
											<div id="platforms">
												<?php
													if (isset($game['platforms'])) {
														foreach($game['platforms'] as $platform) {
															if ($platform['platform'] == 'windows') $res = array('fab fa-windows', 'Windows 7/8/10');
															if ($platform['platform'] == 'linux') $res = array('fab fa-linux', 'GNU/Linux');
															if ($platform['platform'] == 'browser') $res = array('fas fa-globe', 'Navegador');
															echo "
																<a href='".$platform['link']."' rel='noopener norefferer' target='_blank'>
																	<div>
																		<i class='".$res[0]."'></i><br><br>
																		<span>".$res[1]."</span>
																	</div>
																</a>
															";
														}
													} else {
														echo "span class='message'>Nenhuma informação disponível.</span>";
													}
												?>
											</div>
										</div>
									</div>
								</div>
								<div class="built-with">
									<div class="panel">
										<div class="title">
											<h2>Feito com</h2>
										</div>
										<div class="content">
											<div id="built-with">
												<?php
													if (isset($game['built-with'])) {
														$tools = json_decode(file_get_contents('assets/tools.json'), true);
														$tools = $tools['tools'];
														foreach($game['built-with'] as $tool) {
															echo "
																<a href='".$tools[$tool]['link']."' rel='noopener norefferer' target='_blank'>
																	<div>
																		".$tools[$tool]['icon']."<br><br>
																		<span>".$tools[$tool]['name']."</span>
																	</div>
																</a>	
															";
														}
													} else {
														echo "<span class='message'>Nenhuma informação disponível.</span>";
													}
												?>
											</div>
										</div>
									</div>
								</div>
								<div class="guide">
									<div class="panel box">
										<div class="title">
											<h2>Instruções</h2>
										</div>
										<div class="content">
											<div id="guide">
												<?php
													if (isset($game['instructions'])) {
														$guide = file_get_contents('assets/games/'.$game_id.'/'.$game['instructions']);
														if (isset($guide)) echo $guide;
													} else {
														echo "<span class='message'>Nenhuma informação disponível.</span>";
													}
												?>
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
	<script src="js/game.js"></script>
</html>

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

		<?php include('templates/nav-bar.php'); ?>

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

		<?php include('templates/footer.php'); ?>

	</body>

	<script src="js/fontawesome.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
	<script src="js/game.js"></script>
</html>

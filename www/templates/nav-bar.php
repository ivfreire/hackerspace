<nav role="navigation" class="navigation">
	<div class="wrapper">
		<div class="menu">
			<a class="bars" onclick="$('div.menu-btn').slideToggle(300);"><i class="fas fa-bars"></i></a>
			<a class="title" href="index.php">Hackerspace</a>
			<div class="hide-btn menu-btn">
				<a href="events.php">Eventos</a>
				<a href="gamedev.php">Gamedev</a>
				<a href="recepcao.php">Recepção 2023</a>
			</div>
			<div class="right">
				<?php
					/*
					$hs_open = file_get_contents('data/HS_STATE.txt') == "ON";
					if ($hs_open) echo "<a class='status open' title='O Hackerspace está aberto!'><i class='fas fa-door-closed'></i></a>";
					else  echo "<a class='status closed' title='O Hackerspace está fechado atualmente.'><i class='fas fa-door-closed'></i></a>";
					*/
				?>
				<!-- <a class="hide-btn" href="en">English</a> -->
				<a><i class="fas fa-search"></i></a>
			</div>
		</div>
	</div>
</nav>
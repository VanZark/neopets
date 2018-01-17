<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to Neopets!</title>
	<link rel="stylesheet" type="text/css" href="/default.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="/computer.min.css" media="(min-width: 768px)">
	<style>
		#games--banner {
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
		}

		.games--iconHolder {
			box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 0 0 1px rgba(0, 0, 0, 0.08);
			margin: 8px 5px;
		}

		.games--iconHolder,
		.games--iconHolder div {
			width: 100px;
			height: 42px;
			background-position: 0px -21px;
			border-radius: 6px;
		}

		.games--banner-icon {
			position: relative;
			top: -42px;
		}

		.games--iconHolder:hover:not(.active) div {
			background-position: 0px -99px;
		}

		.games--iconHolder.active .games--banner-icon {
			margin-top: -15px;
			height: 80px;
			background-position: 0px -156px;
		}

		.games--gamesRoom {
			display: flex;
			justify-content: space-around;
			flex-wrap: wrap;
		}

		.games--gamesRoom div {
			width: 30%;
			height: 30%;
			min-width: 220px;
			margin: 8px 5px;
		}

		.games-marquee {
			width: 30%;
			height: 30%;
			min-width: 220px;
			border-radius: 6px;
			box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 0 0 1px rgba(0, 0, 0, 0.08);
		}

		.games--FeaturedGameBadge {
			position: absolute;
			margin-top: -130px;
			margin-left: -5px;
			width: 60px;
			height: 60px;
		}

		.games-marquee:hover {
			box-shadow: 0 0px 5px 4px rgba(1, 117, 193, 0.6);
		}

	</style>
</head>

<body>
	<?php include 'interface/header.php';?>
	<main>
		<?php include 'interface/aside.php';?>
		<div>
			<section id="games--banner" style="flex: 1 1 100%;">
				<a href="/games/all">
					<div id="iconall" class="games--iconHolder">
						<div class="games--banner-bg" style="background-image: url(/images/interface/games/all-games-bg.png);"></div>
						<div class="games--banner-icon" style=" background-image: url(/images/interface/games/all-games-icon.png);"></div>
					</div>
				</a>
				<a href="/games/action">
					<div id="iconaction" class="games--iconHolder">
						<div class="games--banner-bg" style="background-image: url(/images/interface/games/action-bg.png);"></div>
						<div class="games--banner-icon" style=" background-image: url(/images/interface/games/action-icon.png);"></div>
					</div>
				</a>
				<a href="/games/adventure">
					<div id="iconadventure" class="games--iconHolder">
						<div class="games--banner-bg" style="background-image: url(/images/interface/games/adventure-bg.png);"></div>
						<div class="games--banner-icon" style=" background-image: url(/images/interface/games/adventure-icon.png);"></div>
					</div>
				</a>
				<a href="/games/brain">
					<div id="iconbrain" class="games--iconHolder">
						<div class="games--banner-bg" style="background-image: url(/images/interface/games/brain-busters-bg.png)"></div>
						<div class="games--banner-icon" style=" background-image: url(/images/interface/games/brain-busters-icon.png);"></div>
					</div>
				</a>
				<a href="/games/card">
					<div id="iconcard" class="games--iconHolder">
						<div class="games--banner-bg" style="background-image: url(/images/interface/games/card-board-bg.png)"></div>
						<div class="games--banner-icon" style=" background-image: url(/images/interface/games/card-board-icon.png);"></div>
					</div>
				</a>
				<a href="/games/luck">
					<div id="iconluck" class="games--iconHolder">
						<div class="games--banner-bg" style="background-image: url(/images/interface/games/luck-chance-bg.png);"></div>
						<div class="games--banner-icon" style=" background-image: url(/images/interface/games/luck-chance-icon.png);"></div>
					</div>
				</a>
				<a href="/games/puzzles">
					<div id="iconpuzzles" class="games--iconHolder">
						<div class="games--banner-bg" style="background-image: url(/images/interface/games/puzzles-bg.png);"></div>
						<div class="games--banner-icon" style=" background-image: url(/images/interface/games/puzzles-icon.png);"></div>
					</div>
				</a>
			</section>
			<section style="flex: 1 1 auto;">
				<table>
					<tr>
						<th>
							<p>All Games</p>
						</th>
					</tr>
					<tr>
						<td>
							<div class="games--gamesRoom">
								<div>
									<img class="games-marquee" src="/images/games/marquees/ng_381.gif" alt="Play Kass Basher">
									<img class="games--FeaturedGameBadge" src="/images/games/favourite-featured-game.png" alt="Featured Game">
								</div>
								<div><img class="games-marquee" src="/images/games/marquees/ng_1095.gif" alt="Play Top Chop"></div>
								<div><img class="games-marquee" src="/images/games/marquees/ng_1146.gif" alt="Play Slorgs in Space"></div>
								<div><img class="games-marquee" src="/images/games/marquees/ng_1223.gif" alt="Play Nova Defender"></div>
								<div><img class="games-marquee" src="/images/games/marquees/ng_1234.gif" alt="Play Altador Cup"></div>
								<div><img class="games-marquee" src="/images/games/marquees/ng_1252.gif" alt="Play Hannah and the Kreludor Caves"></div>
								<div><img class="games-marquee" src="/images/games/marquees/ng_1266.gif" alt="Play Shenkuu Warrior II"></div>
								<div><img class="games-marquee" src="/images/games/marquees/ng_1291.gif" alt="Play Blumaroll"></div>
								<div><img class="games-marquee" src="/images/games/marquees/ng_1292.gif" alt="Play Smelt"></div>
							</div>
						</td>
					</tr>
				</table>
			</section>
		</div>
	</main>
	<?php include 'interface/footer.php';?>
	<script src="/js/global.min.js"></script>
	<script>
		var urlPath = window.location.pathname;
		var path = urlPath.split("/");
		var genre = path[2];
		document.getElementById("icon" + genre).classList.add("active");

	</script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to Neopets!</title>
	<link rel="stylesheet" type="text/css" href="/default.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="/computer.min.css" media="(min-width: 768px)">
	<style>
		.explore--about img {
			height: 75px;
		}

	</style>
</head>

<body>
	<?php include 'interface/header.php';?>
	<main>
		<?php include 'interface/aside.php';?>
		<div>
			<section style="flex: 1 1 100%;">
				<table>
					<tr>
						<th>
							<p>Explore</p>
						</th>
					</tr>
					<tr>
						<td class="explore--map" style="max-width: 100px; height: 100px;">
							<div id="phaser-example"> </div>

					</tr>
				</table>
			</section>
			<section class="explore--about " style="flex: 1 0; ">
				<table>
					<tr>
						<th colspan="2 ">
							<p>About the Lands</p>
						</th>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_alt.png " alt="Altador "></td>
						<td>
							<a>
								<p>Altador</p>
							</a>
							<p>Once a mystery, this land reappeared in Neopia after a thousand-year absence. It has a rich and heroic history... and a really exciting sports tournament!</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_brv.png " alt="Brightvale "></td>
						<td>
							<a>
								<p>Brightvale</p>
							</a>
							<p>This kingdom borders Meridell and is known for its brilliant scholars, stained glass, and delicious fruit. Brightvale Castle, home of King Hagan, is truly a beacon of wisdom, set among lush, green meadows.</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_dar.png " alt="Darigan Citadel "></td>
						<td>
							<a>
								<p>Darigan Citadel</p>
							</a>
							<p>An ancient floating citadel hangs in the air above Meridell. It is ruled by the (once evil) Lord Darigan.</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_fld.png " alt="Faerieland "></td>
						<td>
							<a>
								<p>Faerieland</p>
							</a>
							<p>A giant castle on the ground, full of games, puzzles, and faeries galore. Poogle Races take place every 15 minutes! Also check out the secret hidden tower... if you can find it!</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_hwd.png " alt="Haunted Woods "></td>
						<td>
							<a>
								<p>Haunted Woods</p>
							</a>
							<p>The spooky Halloween land! Who knows what evil lurks within these environs? Read scary stories, embark on chilling quests, and beware the beast that lurks behind the tree...</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_kik.png " alt="Kiko Lake "></td>
						<td>
							<a>
								<p>Kiko Lake</p>
							</a>
							<p>You wouldn't know it at first glance, but an entire community of Kikos resides below Kiko Lake's surface, which was formed within the caldera of a long-dormant volcano. If you can't hold your breath for very long, a glass bottom boat tour may be in order.</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_kra.png " alt="Krawk Island "></td>
						<td>
							<a>
								<p>Krawk Island</p>
							</a>
							<p>This small island off the southern coast of Mystery Island is inhabited by pirates. Visit Krawk Island for exciting games, buried treasure, a great restaurant, and a swashbuckling academy!</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_kre.png " alt="Kreludor "></td>
						<td>
							<a>
								<p>Kreludor</p>
							</a>
							<p>Neopia's moon! This giant chunk of space rock is where Dr. Sloth originally found the Grundos, and some of them live there still. Kreludor is famous for its rare Kreludan metal, a mineral essential for construction of evil robots.</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_lds.png " alt="Lost Desert "></td>
						<td>
							<a>
								<p>Lost Desert</p>
							</a>
							<p>Brucey B accidentally discovered the Lost Desert when chasing his lucky coin! Find rich and exotic foods and curious Petpets, explore the cities of Sakhmet and Qasala, and play Tug-O-War with the locals!</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_lut.png " alt="Lutari Island "></td>
						<td>
							<a>
								<p>Lutari Island</p>
							</a>
							<p>This beautiful island is home to Neopia's Lutaris, and is a paradise of brilliant feathers and sparkling pools.</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_mar.png " alt="Maraqua "></td>
						<td>
							<a>
								<p>Maraqua</p>
							</a>
							<p>After the whirlpool destroyed the original city, King Kelpbeard set about rebuilding something even more splendid, with a strong army to protect it from attackers. But, the pirates found out...</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_mer.png " alt="Meridell "></td>
						<td>
							<a>
								<p>Meridell</p>
							</a>
							<p>A medieval land from the past, Meridell was discovered by a group of unlikely adventurers. Visit Meridell for great games (mostly involving vegetables), faerie quests, bullseye, Mortog kissing, puzzles and much more!</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_mlt.png " alt="Moltara "></td>
						<td>
							<a>
								<p>Moltara</p>
							</a>
							<p>Deep in the core of Neopia lies Moltara, a land of glowing lava flows and strange steam-powered contraptions. Unbeknownst to most of Neopia until Y11, Moltarans have lived alongside the searing magma for many years.</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_myi.png " alt="Mystery Island "></td>
						<td>
							<a>
								<p>Mystery Island</p>
							</a>
							<p>Kick back and relax at the Mystery Island. With cool games, shops, a trading post, a tour, and even a training school, it is a fantastic place for you and your pet to visit. Watch out for the cannibals!</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_neo.png " alt="Neopia Central "></td>
						<td>
							<a>
								<p>Neopia Central</p>
							</a>
							<p>Neopia Central is the bustling hub of activity in Neopia, and houses the main cluster of shops. If you're looking for a certain item, there's a good chance you'll find it in Neopia Central!</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_roo.png " alt="Roo Island "></td>
						<td>
							<a>
								<p>Roo Island</p>
							</a>
							<p>There's no better place to be if you love bouncing, games of chance, and Blumaroos! Every day is a holiday on Roo Island, and today is no exception. Just beware of inhabitants who only venture out at night!</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_sku.png " alt="Shenkuu "></td>
						<td>
							<a>
								<p>Shenkuu</p>
							</a>
							<p>Visit this beautiful and exotic empire of flying ships, Lunar Festivals, and mystical wisdom. Marvel at the beauty of Shenkuu's buildings, which are perched on mountaintops among glistening waterfalls.</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_trm.png " alt="Terror Mountain "></td>
						<td>
							<a>
								<p>Terror Mountain</p>
							</a>
							<p>Three lands in one! Firstly, you can go to Happy Valley, a snowy hamlet at the foot of the mountain, then traverse your way through the Ice Caves, and lastly to the peak of Terror Mountain itself!</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_tyr.png " alt="Tyrannia "></td>
						<td>
							<a>
								<p>Tyrannia</p>
							</a>
							<p>This prehistoric Neopian land was once miles beneath the Ice Caves... Go there for dung furniture, evil pterodactyls, rock concerts, and of course a giant omelette!</p>
						</td>
					</tr>
					<tr>
						<td><img src="/images/explore/logo_vss.png " alt="Virtupets Space Station "></td>
						<td>
							<a>
								<p>Virtupets Space Station</p>
							</a>
							<p>Evil Dr. Sloth has plans to turn all the Neopets in Neopia into his mutant slaves! Go to the Space Station and help thwart his evil plans! There are also games to play, things to buy, and much much more...</p>
						</td>
					</tr>
				</table>
			</section>
		</div>
	</main>
	<?php include 'interface/footer.php';?>
	<script src="/js/global.min.js "></script>
	<script src="/js/phaser.min.js"></script>
	<script>
		var game = new Phaser.Game('100', 400, Phaser.AUTO, 'phaser-example', {
			preload: preload,
			create: create
		});

		function preload() {
			game.load.image('mapImage', 'images/explore/worldmap.jpg');
		}

		function create() {
			game.scale.scaleMode = Phaser.ScaleManager.RESIZE;

			var worldMap = game.add.sprite(0, 0, 'mapImage');

			//  Input Enable the sprites
			worldMap.inputEnabled = true;

			//  Allow dragging - the 'true' parameter will make the sprite snap to the center
			worldMap.input.enableDrag();

		}

	</script>
</body>

</html>

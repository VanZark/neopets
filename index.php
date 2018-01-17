<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to Neopets!</title>
	<link rel="stylesheet" type="text/css" href="/default.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="/computer.min.css" media="(min-width: 768px)">
	<style>
		section table {
			height: 100%;
		}

		.home--newsflash {
			min-width: 60%;
		}

		.home--newsflash td {
			position: relative;
			background-image: url('/images/interface/petcentral/marquee/newsFlash_Event.png'), url('/images/interface/petcentral/marquee/JudgeHog.png'), url('/images/interface/petcentral/marquee/central_arena_bg.jpg');
			background-repeat: no-repeat;
			background-position: top left, -30px 0, center;
			background-size: auto, auto 100%, cover;
			height: 250px;
		}

		.home--newsflash-title {
			margin-top: 100px;
			text-shadow: -2px 0 black, 0 2px black,
			2px 0 black, 0 -2px black;
			text-align: center;
		}

		.home--newsflash-title p:first-of-type {
			color: white;
			font-size: 300%;
		}

		.home--newsflash-title p:last-of-type {
			color: white;
			font-size: 140%;
			font-weight: 400;
		}

		.home--notable td {
			text-align: center;
		}

		.home--calendar-banner {
			height: 100px;
			background-image: url('/images/interface/petcentral/calendar/calendar_banner.jpg');
			background-repeat: no-repeat;
			background-position: top left;
			background-size: 100% auto;
		}

	</style>
</head>

<body>
	<?php include 'interface/header.php';?>
	<main>
		<?php include 'interface/aside.php';?>

		<div>
			<section class="home--newsflash" style="flex: 3;">
				<table>
					<tr>
						<th>
							<p>News Flash</p>
						</th>
					</tr>
					<tr>
						<td>

							<div class="home--newsflash-title">

								<p><b>Defenders of Neopia</b></p>
								<p>Join Neopia's best line of defence!</p>

							</div>

						</td>
					</tr>
				</table>
			</section>
			<section class="home--notable" style="flex: 1;">
				<table>
					<tr>
						<th>
							<p>Notable Neopet</p>
						</th>
					</tr>
					<tr>
						<td><img src="/images/pets/acara_blue.png" alt="Notable Pet Preview"></td>
					</tr>
					<tr>
						<td>
							<hr>
							<p><a>LilZark</a></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>Owned by: <a href="/userlookup.php">VanZark</a></p>
						</td>
					</tr>
				</table>
			</section>
			<section style="flex: 1 0;">
				<img src="/images/interface/petcentral/promo/victorian_superpacks.png" alt="Promo">
			</section>
			<section class="home--calendar" style="flex: 1 0 auto;">
				<table>
					<tr>
						<th colspan="2">
							<p>Calendar</p>
						</th>
					</tr>
					<tr>
						<td class="home--calendar-banner" colspan="2"></td>
					</tr>
					<tr>
						<td>
							<p><b>5th</b></p>
							<hr>
						</td>
						<td>
							<p>Bruce Day</p>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<p><b>12th</b></p>
							<hr>
						</td>
						<td>
							<p>Wocky Day</p>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<p><b>20th</b></p>
							<hr>
						</td>
						<td>
							<p>Borovan Day</p>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<p><b>25th</b></p>
							<hr>
						</td>
						<td>
							<p>Day of Giving</p>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<p><b>28th</b></p>
							<hr>
						</td>
						<td>
							<p>Ogrin Day</p>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<p><b>31st</b></p>
						</td>
						<td>
							<p>Neopia enters a new year! (Y20)</p>
						</td>
					</tr>
				</table>
			</section>

			<section class="home--stats" style="flex: 1 0 auto;">
				<table>
					<tr>
						<th colspan="2">
							<p>Neopets Stats</p>
						</th>
					</tr>
					<tr>
						<td rowspan="2"><img src="/images/interface/petcentral/stats/pc_totalowners.gif" alt="Total owners"></td>
						<td>
							<p><b>Total Owners</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>194,957,396</p>
							<hr>
						</td>
					</tr>
					<tr>
						<td rowspan="2"><img src="/images/interface/petcentral/stats/pc_totalneopets.gif" alt="Total neopets"></td>
						<td>
							<p><b>Total Neopets</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>283,671,124</p>
							<hr>
						</td>
					</tr>
					<tr>
						<td rowspan="2"><img src="/images/interface/petcentral/stats/pc_neopetsperowner.gif" alt="Neopets per owner"></td>
						<td>
							<p><b>Neopets per Owner</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>1.455</p>
							<hr>
						</td>
					</tr>
					<tr>
						<td rowspan="2"><img src="/images/interface/petcentral/stats/pc_totalpageviews.gif" alt="Total page views"></td>
						<td>
							<p><b>Pageviews</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>1,115,391,490,000</p>
						</td>
					</tr>
				</table>
			</section>
		</div>
	</main>
	<?php include 'interface/footer.php';?>
	<script src="/js/global.min.js"></script>
</body>

</html>

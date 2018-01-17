<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to Neopets!</title>
	<link rel="stylesheet" type="text/css" href="/default.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="/computer.min.css" media="(min-width: 768px)">
	<style>
		section table div div {
			margin: 10px;
		}

		.userlookup--usericons {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}

		.userlookup--usericons div {
			flex: 1 0 auto;
			text-align: center;
		}

		.userlookup--neopets {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}

		.userlookup--neopets div {
			flex: 1 1 auto;
			text-align: center;
		}

		.userlookup--neopets img {
			width: 100%;
			max-width: 200px;
		}

	</style>
</head>

<body>
	<?php include 'interface/header.php';?>
	<main>
		<?php include 'interface/aside.php';?>
		<div>
			<section style="flex: 1 1 auto;">
				<table>
					<tr>
						<th colspan="2">
							<p>User Info</p>
						</th>
					</tr>
					<tr>
						<td>
							<p><b>Name:</b> VanZark</p>
						</td>
						<td rowspan="5"><img src="/images/shields/9mth.gif" alt="Account Age Shield"></td>
					</tr>
					<tr>
						<td>
							<p><b>Gender:</b> Male</p>
						</td>
					</tr>
					<tr>
						<td>
							<p><b>Country:</b> Canada</p>
						</td>
					</tr>
					<tr>
						<td>
							<p><b>Last Spotted:</b> Under a day ago</p>
						</td>
					</tr>
					<tr>
						<td>
							<p><b>Started Playing:</b> March 2, 2017</p>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<hr>
							<div class="userlookup--usericons">
								<div>
									<img src="/images/interface/userlookup/ul_trades.gif" alt="User's Trades">
									<a>
										<p>Trades</p>
									</a>
								</div>
								<div>
									<img src="/images/interface/userlookup/ul_auctions.gif" alt="User's Auctions">
									<a>
										<p>Auctions</p>
									</a>
								</div>
								<div>
									<img src="/images/interface/userlookup/ul_wishlist.gif" alt="User's Wishlist">
									<a>
										<p>Wishlist</p>
									</a>
								</div>
								<div>
									<img src="/images/interface/userlookup/ul_neomail.gif" alt="Neomail User">
									<a>
										<p>Neomail</p>
									</a>
								</div>
								<div>
									<img src="/images/interface/userlookup/ul_neofriend.gif" alt="Add User as Neofriend">
									<a>
										<p>Neofriend</p>
									</a>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</section>
			<section style="flex: 1 1 auto;">
				<table>
					<tr>
						<th colspan="6">
							<p>Neopets</p>
						</th>
					</tr>
					<tr>
						<td>
							<div class="userlookup--neopets">
								<div>
									<img src="/images/pets/acara_blue.png" alt="Pet Preview">
									<a>
										<p>Petname</p>
									</a>
									<p>The Blue Acara</p>
								</div>
								<div>
									<img src="/images/pets/gelert_red.png" alt="Pet Preview">
									<a>
										<p>Petname</p>
									</a>
									<p>The Red Gelert</p>
								</div>
								<div>
									<img src="/images/pets/scorchio_green.png" alt="Pet Preview">
									<a>
										<p>Petname</p>
									</a>
									<p>The Green Scorchio</p>
								</div>
								<div>
									<img src="/images/pets/bruce_red.png" alt="Pet Preview">
									<a>
										<p>Petname</p>
									</a>
									<p>The Red Bruce</p>
								</div>
								<div>
									<img src="/images/pets/shoyru_red.png" alt="Pet Preview">
									<a>
										<p>Petname</p>
									</a>
									<p>The Red Shoyru</p>
								</div>
								<div>
									<img src="/images/pets/meerca_yellow.png" alt="Pet Preview">
									<a>
										<p>Petname</p>
									</a>
									<p>The Yellow Meerca</p>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</section>
			<section style="flex: 1 1 auto;">
				<table>
					<tr>
						<th>
							<p>
								Collections</p>
						</th>
					</tr>
					<tr>
						<td>
							<div class="userlookup--usericons">
								<div>
									<img src="/images/avatars/default.gif" alt="User's Avatars">
									<p><b>Avatars</b></p>
									<p>16</p>
								</div>
								<div>
									<img src="/images/interface/userlookup/ul_keyquest.gif" alt="User's Keyquest Tokens">
									<p><b>Key Quest</b></p>
									<p>1 (1 unique)</p>
								</div>
								<div>
									<img src="/images/interface/userlookup/ul_stamp.gif" alt="User's Stamps">
									<p><b>Stamps</b></p>
									<p>0</p>
								</div>
								<div>
									<img src="/images/interface/userlookup/ul_neodeck.gif" alt="User's Neodeck">
									<p><b>Neodeck</b></p>
									<p>0</p>
								</div>
								<div>
									<img src="/images/interface/userlookup/ul_theme.gif" alt="User's Themes">
									<p><b>Site Themes</b></p>
									<p>2</p>
								</div>
								<div>
									<img src="/images/interface/userlookup/ul_battledome.gif" alt="User's Battledone States">
									<p><b>One Player BD</b></p>
									<p>0 - 0</p>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</section>
			<section style="flex: 1 1 auto;">
				<table>
					<tr>
						<th>
							<p>
								Games and Trophies</p>
						</th>
					</tr>
					<tr>
						<td>
							<p><b>Event Trophies</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="userlookup--usericons">
								<div>
									<img src="/images/trophy/ldp_trophy3.gif" alt="Trophy">
									<p><b>Desert Scarab</b></p>
									<p>(11,650)</p>
								</div>
								<div>
									<img src="/images/trophy/altador_trophy.gif" alt="Trophy">
									<p><b>Royal Astronomer</b></p>
								</div>
								<div>
									<img src="/images/trophy/trophy_altcup_1.gif" alt="Trophy">
									<p><b>Altador Cup 1st Place</b></p>
									<p>(Devotee)</p>
								</div>
								<div>
									<img src="/images/trophy/trophy_4.gif" alt="Trophy">
									<p><b>Lucky Guesser</b></p>
									<p>(11,650)</p>
								</div>
								<div>
									<img src="/images/trophy/hwp_trophy_5_56b107e4f4.gif" alt="Trophy">
									<p><b>Neovian Citizen</b></p>
									<p>(27,955)</p>
								</div>
								<div>
									<img src="/images/trophy/jli_trophy_s83ld9skej.gif" alt="Trophy">
									<p><b>Isle Seeker</b></p>
									<p>(1,325)</p>
								</div>
								<div>
									<img src="/images/trophy/trophy_altcup2_7.gif" alt="Trophy">
									<p><b>Altador Cup II</b></p>
									<p>(Participant)</p>
								</div>
								<div>
									<img src="/images/trophy/trophy_8_1ebb448028.gif" alt="Trophy">
									<p><b>Games Master</b></p>
									<p>Level 8</p>
								</div>
							</div>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<p><b>Feature Trophies</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="userlookup--usericons">
								<div>
									<img src="/images/trophy/trophy1.gif" alt="Trophy">
									<p><b>Kadoatery</b></p>
									<p>(3582 fed)</p>
								</div>
								<div>
									<img src="/images/trophy/medal9_20697.gif" alt="Trophy">
									<p><b>Defender of Neopia</b></p>
									<p>(Mission 8)</p>
								</div>
								<div>
									<img src="/images/trophy/medal5_27475.gif" alt="Trophy">
									<p><b>Defender of Neopia Series 2</b></p>
									<p>(Mission 4)</p>
								</div>
								<div>
									<img src="/images/trophy/premium_lucky_charm.gif" alt="Trophy">
									<p><b>Lucky Space Faerie Charm</b></p>
								</div>
								<div>
									<img src="/images/trophy/talisman_80.gif" alt="Trophy">
									<p><b>Lutari Talisman</b></p>
								</div>
							</div>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<p><b>Game Trophies</b></p>
						</td>
					</tr>
					<tr>
						<td>
							<p>Games Played: <a>553</a></p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="userlookup--usericons">
								<div>
									<img src="/images/trophy/36_1.gif" alt="Trophy">
									<p><b>Vending Machine</b></p>
									<p>1st Place</p>
								</div>
								<div>
									<img src="/images/trophy/55_1.gif" alt="Trophy">
									<p><b>Snow Wars</b></p>
									<p>1st Place</p>
								</div>
								<div>
									<img src="/images/trophy/58_3.gif" alt="Trophy">
									<p><b>The Neopian Lottery</b></p>
									<p>3rd Place</p>
								</div>
								<div>
									<img src="/images/trophy/68_1.gif" alt="Trophy">
									<p><b>Pyramid Bonus</b></p>
									<p>1st Place</p>
								</div>
								<div>
									<img src="/images/trophy/75_1.gif" alt="Trophy">
									<p><b>Brain Tree Quest</b></p>
									<p>1st Place</p>
								</div>
								<div>
									<img src="/images/trophy/77_1.gif" alt="Trophy">
									<p><b>Sakhmet Solitaire Bonus</b></p>
									<p>1st Place</p>
								</div>
								<div>
									<img src="/images/trophy/88_2.gif" alt="Trophy">
									<p><b>Food Club</b></p>
									<p>2nd Place</p>
								</div>
								<div>
									<img src="/images/trophy/91_3.gif" alt="Trophy">
									<p><b>NeoQuest</b></p>
									<p>3rd Place</p>
								</div>
							</div>
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

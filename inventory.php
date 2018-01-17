<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to Neopets!</title>
	<link rel="stylesheet" type="text/css" href="/default.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="/computer.min.css" media="(min-width: 768px)">
	<style>
		span {
			font-weight: 700;
		}

		.inventory--banner {
			text-align: center;
		}

		.inventory--banner p {
			margin: 10px;
		}

		.inventory--items {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;
		}

		.inventory--items div {
			margin: 5px;
			text-align: center;
		}

		.inventory--items img {
			border: 1px solid #CFCFCF;
		}

	</style>
</head>

<body>
	<?php include 'interface/header.php';?>
	<main>
		<?php include 'interface/aside.php';?>
		<div>
			<section class="inventory--banner" style="flex: 1 1 auto;">
				<img src="/images/shopbanners/myitems_newimage.gif" alt="Inventory Banner">
				<p><a>Closet</a> | <a>Safety Deposit Box</a> | <a>Equipment</a> | <a>Shed</a> | <a>Gallery</a> | <a>Stamps</a> | <a>TCG</a> | <a>NC Album</a></p>
				<p><a>Quick Stock</a> | <a>Item Transfer Log</a></p>
			</section>
			<section style="flex: 1 1 auto;">
				<table>
					<tr>
						<th>
							<p>Items</p>
						</th>
					</tr>
					<tr>
						<td>
							<p>Total Items: 1 (The maximum you should hold is 50.)</p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="inventory--items">
								<div>
									<img src="/images/items/19758.gif" alt="Rainbow Dung">
									<p><span>Rainbow Dung</span></p>
									<p></p>
								</div>
								<div>
									<img src="/images/items/19758.gif" alt="Rainbow Dung">
									<p><span>Rainbow Dung</span></p>
									<p></p>
								</div>
								<div>
									<img src="/images/items/19758.gif" alt="Rainbow Dung">
									<p><span>Rainbow Dung</span></p>
									<p></p>
								</div>
								<div>
									<img src="/images/items/19758.gif" alt="Rainbow Dung">
									<p><span>Rainbow Dung</span></p>
									<p></p>
								</div>
								<div>
									<img src="/images/items/19758.gif" alt="Rainbow Dung">
									<p><span>Rainbow Dung</span></p>
									<p></p>
								</div>
								<div>
									<img src="/images/items/19758.gif" alt="Rainbow Dung">
									<p><span>Rainbow Dung</span></p>
									<p></p>
								</div>
								<div>
									<img src="/images/items/19758.gif" alt="Rainbow Dung">
									<p><span>Rainbow Dung</span></p>
									<p></p>
								</div>
								<div>
									<img src="/images/items/19758.gif" alt="Rainbow Dung">
									<p><span>Rainbow Dung</span></p>
									<p></p>
								</div>
								<div>
									<img src="/images/items/19758.gif" alt="Rainbow Dung">
									<p><span>Rainbow Dung</span></p>
									<p></p>
								</div>
								<div>
									<img src="/images/items/19758.gif" alt="Rainbow Dung">
									<p><span>Rainbow Dung</span></p>
									<p></p>
								</div>
								<div>
									<img src="/images/items/19758.gif" alt="Rainbow Dung">
									<p><span>Rainbow Dung</span></p>
									<p></p>
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
							<p>Neocash Items</p>
						</th>
					</tr>
					<tr>
						<td>
							<p>Total Items: 0</p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="inventory--items">

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

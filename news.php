<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to Neopets!</title>
	<link rel="stylesheet" type="text/css" href="/default.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="/computer.min.css" media="(min-width: 768px)">
	<style>
		.news td {
			padding: 10px;
		}

		.news img {
			margin: 10px auto;
			max-width: 100%;
		}

	</style>
</head>

<body>
	<?php include 'interface/header.php';?>
	<main>
		<?php include 'interface/aside.php';?>
		<div>
			<section class="news" style="flex: 1 1 auto">
				<table>
					<tr>
						<th>
							<p>News: 14th of January</p>
						</th>
					</tr>
					<tr>
						<td>
							<ul>
								<li>
									<p>The <a href="/explore">explore</a> map has been updated! Instead of just a fixed image, it can be scaled and panned. Allowing for more detailed maps and opening up more room for new lands to be added in the future.</p>
									<p><b>NEXT STEPS:</b> It's currently just a proof of concept with a lot of lacking features. Support for mobile touch interaction needs to be added. Constrants on how far a user can pan and zoom in and out of the map also need to be implemented. Of course the ability to actually click on areas and being able to visit is also another biggy.</p>
								</li>
							</ul>
						</td>
					</tr>
				</table>
			</section>
			<section class="news" style="flex: 1 1 auto">
				<table>
					<tr>
						<th>
							<p>News: 13th of January</p>
						</th>
					</tr>
					<tr>
						<td>
							<ul>
								<li>
									<p>The <a href="/games">games</a> tab now works! Taking you to a revamped layout of the games room. A simple clean design to allow users to quickly find the game they are looking for. By default the page shows all games. Sorted by popularity with the featured game always listed first.</p>
									<p><b>NEXT STEPS:</b> Icons along the top of the page will allow for quick catagory switching. The visual elements of these buttons currently work but they don't acctully change the games shown.</p>
								</li>
								<li>
									<p>The pet icons in the navigation menu have also been updated. Originally the selected icon would have a blue glow around it to indicate the primary pet. On some of the pages with a lot of colorful elements, the pet icons just caused additional distraction. Instead of acting as a handy quick referance they were compeating for visual attention on everypage. I've instead went with the route of setting the icons of non-primary pets to 0.5 opacity. By doing this it pushes lass important elements into the background instead of trying to make importent elements more flashy and adding unnecessary visual noise to the overall page.</p>
								</li>
								<li>
									<p>The "News Flash" table on the <a href="/">home</a> page has been updated to be more flexible. Instead of using a single flat images, it's now able to accommodate several dynamic layers. Allowing for easy headline editing and the use of already existing art assist to quickly make new promotional news banners. This method also scales and flows better with window resizing. Since it is no longer limited by the aspect ratio of the uploaded images.</p>
									<p><b>NEXT STEPS:</b> Adding the ability to have several new flash benners simultaneously and have them cycle through periodically.</p>
								</li>
							</ul>
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

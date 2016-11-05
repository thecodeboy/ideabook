<!DOCTYPE HTML>
<html>
	<head>
		<title>Ideabook by Aishik</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="images/logo.svg" alt="" /></span>
						<h1>Ideabook</h1>
						<p>A place for your ideas. Built by <a href="https://www.aishik.com">Aishik Saha</a>.</p>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Write an Idea</a></li>
							<li><a href="#cta">See some Ideas</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->





						<!-- Get Started -->
							<section id="cta" class="main special">
								<header class="major">
									<h2>See some Ideas</h2>
									<p>Looks at the ideas other people have submitted to the worldwide repository.</p>
								</header>

								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>Name</th>
												<th>Idea</th>

											</tr>
										</thead>
										<tbody>

												<?php
												$mysqli = new mysqli("127.0.0.1", "root", "koala", "ideabook");
												$mysqli->real_query("SELECT Name, Idea FROM ideas;");
												$z = $mysqli->field_count;
												$uber = $mysqli->store_result();
												while($urow = $uber->fetch_row())
												{
												    echo "<tr>";
												    foreach($urow as $cell)
												        echo "<td>$cell</td>";
												    echo "</tr>\n";
												}
												?>
										</tbody>

									</table>
								</div>



							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; 2016 Aishik Saha. Made with love in India.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

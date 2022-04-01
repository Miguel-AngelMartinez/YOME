<!DOCTYPE HTML>
<!--
	Halcyonic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Halcyonic by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Logo -->
									<h1><a href="/" id="logo">YOME-DEVELOPER</a></h1>

								<!-- Nav -->
									<nav id="nav">
                                        <a href="/">Homepage</a>
										<a href="{{Route('index')}}">Three Column</a>
										<a href="{{Route('vista')}}">Two Column #1</a>

									</nav>

							</div>
						</div>
					</div>
					<div id="banner">
						<div class="container">
							<div class="row">
								<div class="col-6 col-12-medium">

									<!-- Banner Copy -->
										<p>Soy un estudiante de la universidad politecnica de tecamac</p>
										<a href="https://github.com/Miguel-AngelMartinez" class="button-large">link a mi repo!</a>

								</div>
								<div class="col-6 col-12-medium imp-medium">

									<!-- Banner Image -->
										<a href="#" class="bordered-feature-image"><img src="https://i0.wp.com/codigoespagueti.com/wp-content/uploads/2021/02/My-Hero-Academia_-Artista-recrea-a-Deku-dandole-un-aspecto-totalmente-distinto-al-arte-original.jpg?fit=1280%2C720&quality=80&ssl=1" alt="" /></a>

								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Features -->
				<section id="features">
					<div class="container">
						<div class="row">


							<div class="col-3 col-6-medium col-12-small">

								<!-- Feature #1 -->
									<section>
                                        @foreach ($v as $v)

                                        <h2>{{$v['titulo']}}</h2>

                                        <iframe class="bordered-feature-image" width="560" height="315" src="{{$v['url']}}" title="{{$v['titulo']}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

										<p>
											 {{$v['descripcion']}}
										</p>
                                        @endforeach
									</section>

							</div>


						</div>
					</div>

				</section>

			<!-- Content -->
				<section id="content">
					<div class="container">
						<div class="row aln-center">
							<div class="col-4 col-12-medium">

								<!-- Box #1 -->
									<section>
										<header>
											<h2>Quien soy</h2>
											<h3>Miguel Angel Martinez Castro</h3>
										</header>
										<a href="#" class="feature-image"><img src="https://i0.wp.com/codigoespagueti.com/wp-content/uploads/2021/02/My-Hero-Academia_-Artista-recrea-a-Deku-dandole-un-aspecto-totalmente-distinto-al-arte-original.jpg?fit=1280%2C720&quality=80&ssl=1" alt="" /></a>
										<p>
											soy un pequeño entuciasta por el desarrollo de software, el desarrollo web y diversas tecnologias
                                            entre las que destacan las tecnologias de la informatica y la programacion como C++, C#, java, javascript, cobol, 
                                            html, css, php y frameworks como Laravel, Node.js, React.js, Bootstrap, etc.
										</p>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Box #2 -->
									

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Box #3 -->
									<section>
										<header>
											<h2>What People Are Saying</h2>
											<h3>And a final subheading about our clients</h3>
										</header>
										<ul class="quote-list">
											<li>
												<img src="images/pic06.jpg" alt="" />
												<p>"Neque nisidapibus mattis"</p>
												<span>Jane Doe, CEO of UntitledCorp</span>
											</li>
											<li>
												<img src="images/pic07.jpg" alt="" />
												<p>"Lorem ipsum consequat!"</p>
												<span>John Doe, President of FakeBiz</span>
											</li>
											<li>
												<img src="images/pic08.jpg" alt="" />
												<p>"Magna veroeros amet tempus"</p>
												<span>Mary Smith, CFO of UntitledBiz</span>
											</li>
										</ul>
									</section>

							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<div class="row">
							<div class="col-8 col-12-medium">

								<!-- Links -->
									<section>
										<h2>Links to Important Stuff</h2>
										<div>
											<div class="row">
												<div class="col-3 col-12-small">
													<ul class="link-list last-child">
														<li><a href="#">Neque amet dapibus</a></li>
														<li><a href="#">Sed mattis quis rutrum</a></li>
														<li><a href="#">Accumsan suspendisse</a></li>
														<li><a href="#">Eu varius vitae magna</a></li>
													</ul>
												</div>
												<div class="col-3 col-12-small">
													<ul class="link-list last-child">
														<li><a href="#">Neque amet dapibus</a></li>
														<li><a href="#">Sed mattis quis rutrum</a></li>
														<li><a href="#">Accumsan suspendisse</a></li>
														<li><a href="#">Eu varius vitae magna</a></li>
													</ul>
												</div>
												<div class="col-3 col-12-small">
													<ul class="link-list last-child">
														<li><a href="#">Neque amet dapibus</a></li>
														<li><a href="#">Sed mattis quis rutrum</a></li>
														<li><a href="#">Accumsan suspendisse</a></li>
														<li><a href="#">Eu varius vitae magna</a></li>
													</ul>
												</div>
												<div class="col-3 col-12-small">
													<ul class="link-list last-child">
														<li><a href="#">Neque amet dapibus</a></li>
														<li><a href="#">Sed mattis quis rutrum</a></li>
														<li><a href="#">Accumsan suspendisse</a></li>
														<li><a href="#">Eu varius vitae magna</a></li>
													</ul>
												</div>
											</div>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium imp-medium">

								<!-- Blurb -->
									<section>
										<h2>An Informative Text Blurb</h2>
										<p>
											Duis neque nisi, dapibus sed mattis quis, rutrum accumsan sed. Suspendisse eu
											varius nibh. Suspendisse vitae magna eget odio amet mollis. Duis neque nisi,
											dapibus sed mattis quis, sed rutrum accumsan sed. Suspendisse eu varius nibh
											lorem ipsum amet dolor sit amet lorem ipsum consequat gravida justo mollis.
										</p>
									</section>

							</div>
						</div>
					</div>
				</section>

			<!-- Copyright -->
				<div id="copyright">
					&copy; Untitled. All rights reserved. | Design: <a href="http://html5up.net">HTML5 UP</a>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

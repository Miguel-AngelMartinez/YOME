<!DOCTYPE HTML>
<!--
	Halcyonic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Three Column - Halcyonic by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
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
				</section>

			<!-- Content -->
				<section id="content">
					<div class="container">
						<div class="row">
							<div class="col-3 col-12-medium">

								<!-- Left Sidebar -->
									<section>
										<header>
											<h2>Pokemon</h2>
										</header>
										<p>
                                            hay alrededor de
                                            @foreach($pokemon as $pokemon)
                                                <li>{{$pokemon['count']}}</li>
                                            @endforeach
                                            pokemos
										</p>
										<ul class="link-list">
											<li><a href="#">Sed dolore viverra</a></li>
											<li><a href="#">Ligula non varius</a></li>
											<li><a href="#">Dis parturient montes</a></li>
											<li><a href="#">Nascetur ridiculus</a></li>
										</ul>
									</section>

							</div>
							<div class="col-6 col-12-medium imp-medium">

								<!-- Main Content -->
									<section>
										<header>
											<h2>APIS</h2>
											<h3>que es una api??</h3>
										</header>
										<p>
											El término API es una abreviatura de Application Programming Interfaces, que en español significa interfaz de programación de aplicaciones. Se trata de un conjunto de definiciones y protocolos que se utiliza para desarrollar e integrar el software de las aplicaciones, permitiendo la comunicación entre dos aplicaciones de software a través de un conjunto de reglas.
										</p>
										<p>
											Así pues, podemos hablar de una API como una especificación formal que establece cómo un módulo de un software se comunica o interactúa con otro para cumplir una o muchas funciones. Todo dependiendo de las aplicaciones que las vayan a utilizar, y de los permisos que les dé el propietario de la API a los desarrolladores de terceros.
										</p>
                                        <header>
                                            <h2>Para qué sirve una API</h2>
                                        </header>
										<p>
                                            Una de las principales funciones de las API es poder facilitarle el trabajo a los desarrolladores y ahorrarles tiempo y dinero. Por ejemplo, si estás creando una aplicación que es una tienda online, no necesitarás crear desde cero un sistema de pagos u otro para verificar si hay stock disponible de un producto. Podrás utilizar la API de un servicio de pago ya existente, por ejemplo PayPal, y pedirle a tu distribuidor una API que te permita saber el stock que ellos tienen.
										</p>
									</section>

							</div>
							<div class="col-3 col-12-medium">

								<!-- Right Sidebar -->

									<section>
										<header>
                                            <h2>Bored_api</h2>
										</header>
										<p>

                                            @foreach ($datos as $datos)

                                            <h3>{{$datos['activity']}}</h3>
                                            <br>
                                            <label>accessibility: {{$datos['accessibility']}}</label>
                                            <br>
                                            <label>tipo:{{$datos['type']}}</label>
                                            <br>
                                            <label>participantes{{$datos['participants']}}</label>
                                            <br>
                                            <label>Precio{{$datos['price']}}</label>
                                            <br>
                                            <label>link:{{$datos['link']}}</label>
                                            <br>
                                            <label>llave{{$datos['key']}}</label>
                                            <br>
                                            @endforeach
                                            <!--fin-->
										</p>
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
























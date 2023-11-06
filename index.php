<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="assets/img/icon/favicons.jpg" type="image/ico" sizes="16x16">
	<title>Bienvenue au Dermato as Ndere</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Poppins&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<style>
		html {
			scroll-behavior: smooth;
		}

		h2,
		h3,
		h4,
		h5,
		h6 {
			font-weight: 700;
		}

		body {
			/* font-family: 'Open Sans', sans-serif; */
			font-family: 'Lato', sans-serif;
			/* font-family: 'Poppins', sans-serif; */
		}

		.navbar {
			padding-top: 2rem;
		}

		.navbar .nav-item {
			margin: 0 .75rem 0;
		}

		.navbar-brand a {
			box-shadow: 0px 25px 10px -15px rgba(0, 0, 0, 0.08);
		}

		.nav-dropdown {
			border-radius: 10px;
			border: 1px #5a453e solid !important;
			padding: 0 1.2rem;
			color: #5a453e;
			/* background: linear-gradient(to right, #263d26 0%, #264029 50%); */
		}

		.nav-dropdown a.dropdown-link {
			color: #5a453e !important;
		}
		
		.btn-primary {
			color: #fff;
			background: linear-gradient(to right, #264029 0%, #263d26 100%) !important;
			border-color: #5a453e !important;
		}

		.btn-primary:hover {
			color: #fff;
			background-color: #264029 !important;
			border-color: #263d26 !important;
			-webkit-box-shadow: none;
			box-shadow: none;
		}

		.btn-primary:focus {
			box-shadow: 0 0 0 0.2rem rgba(111, 66, 194, .5) !important;
		}

		.jumbotron {
			/* padding: 18rem 0; */
			padding: 15% 0;
			background: url('./assets/img/background.jpg');
			background-repeat: no-repeat;
			background-size:cover;
			background-position: 100% 10%;
			min-width: 100%;
		}

		.rdv{
			width:20%;
		}

		.rdv-container{
			width:100%;
			display:flex;
			justify-content: flex-end;
		}

		.about-text{
			width : 70%;
			margin: auto;
		}

		.jumbotron .container p{
			text-align: right;
			color:#264029;
		}

		.jumbotron-title {
			font-size: 3rem;
			text-align: right;
			text-transform: capitalize;
			color:#264029;
		}

		section {
			padding: 3rem 0 6rem;
		}

		.section-title {
			margin-bottom: 6rem;
		}

		section img {
			margin-bottom: 2rem;
		}

		.feature-section {
			background: url('./assets/img/getty_patient_care.jpg');
			background-position: 0% 100%;
			background-size: 600px;
			background-repeat: no-repeat;
		}

		.feature-section .card {
			border-radius: 10px;
			box-shadow: 0px 25px 10px -15px rgba(0, 0, 0, 0.08);
			transition: .4s;
		}

		.feature-section .card:hover {
			transform: scale(1.1);
			box-shadow: 0px 25px 10px -15px rgba(0, 0, 0, 0.08);
		}

		.footer {
			width: 100%;
			height: auto;
			color: #333;
			bottom: 0px;
			left: 0px;
			padding: 45px 0 40px;
		}

		.footer a {
			color: #333;
		}

		.footer a:hover {
			color: purple;
			text-decoration: none;
		}

		.footer ul li {
			margin: .8rem 0;
		}

		.upper-footer {
			border-bottom: #f8f8f9;
			width: 100%;
		}

		.bottom-footer {
			margin-top: 10px;
		}

		.footer ul {
			list-style-type: none;
		}

		.footer ul li {
			margin-left: -40px;
		}

		.footer-link {
			text-align: right;
		}

		.bottom-footer-link {
			margin: 0 5px;
		}

		.top-button {
			position: absolute;
			right: 30px;
		}

		.top-scroll {
			padding: 10px 16px;
			background-color: #f2f2f2;
			border-radius: 5px;
			font-size: 20px;
			transition: .3s;
		}

		.top-scroll:hover {
			background-color: #dfdddd;
		}

		img.banner {
			/* width: 380px !important; */
			/* height: 450px !important; */
		}


		/*
FOR ANIMATION
*/

		.slideanim {
			visibility: hidden;
		}

		.slide {
			/* The name of the animation */
			animation-name: slide;
			-webkit-animation-name: slide;
			/* The duration of the animation */
			animation-duration: 1s;
			-webkit-animation-duration: 1s;
			/* Make the element visible */
			visibility: visible;
		}

		/* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
		@keyframes slide {
			0% {
				opacity: 0;
				transform: translateY(70%);
			}

			100% {
				opacity: 1;
				transform: translateY(0%);
			}
		}

		@-webkit-keyframes slide {
			0% {
				opacity: 0;
				-webkit-transform: translateY(70%);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateY(0%);
			}
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="#"><img src="./assets/img/logo.jpg" width ="82px" height ="70px" alt="Dermato as Ndere"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#about">A propos de nous</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#howitwork">Nos activites</a>
						</li>
						<li class="nav-item dropdown nav-dropdown">
							<a class="nav-link dropdown-toggle dropdown-link" href="#" id="navbarDropdownMenuLink"
								role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Compte
								
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#patient">
								<?php // start the session
								session_start();
								echo strtoupper($_SESSION['calendar_fd_user']['name']); 
								?></a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h2 class="jumbotron-title">BIENVENUE <br>CHEZ <b>DERMATO AS NDERE</b></h2>
				<p>Le lieu de la santé du bien être par excellence</p>
				<div class="rdv-container"><a class="rdv btn btn-primary" href="./appoint/">PRENDRE RENDEZ-VOUS</a></div>
			</div>
		</div>

		<section class="text-center" id="about">
			<h2 class="section-title">A propos de nous</h2>
			<div class="container">
				<div class="row slideanim">
					<div class="about-text"><p><b>Dermato as ndere</b> a ete fonde sur trois grands principes l'importance de la santé, un service exceptionnel et des conseils adaptés à vous . Notre equipe s'engage a fournir à ses patients les conseils, les produits et les informations les plus surs et les plus efficaces. Vous souhaitez en savoir plus sur nos prestations ? <br> Appelez-nous dès aujourd'hui.</p></div>			</div>
			</div>
		</section>

		<section class="about-section text-center" id="howitwork">
			<h2 class="section-title">Nos activites</h2>
			<div class="container">
			<div class="row slideanim">
					<div class="col-6 col-md-4">
						<div class="image">
						<img src="assets/img/dermatologie.jpg" width="350px" alt="" title="">
						</div>
						<div class="desc">
							<h4 class="mb-3">CONSULTATION DE DERMATOLOGIE</h4>
							<p class="paragraph">
							Nous vous proposons des télé consultations afin de venir à bout de vos problèmes de peau ou alors afin d'avoir une orientation claire quant aux prochaines étapes de votre prise en charge
							</p>
						</div>
					</div>
					<div class="col-6 col-md-4">
						<div class="image">
							<img src="assets/img/venerologie.jpg" width="350px" height="219px" alt="" title="">
						</div>
						<div class="desc">
							<h4 class="mb-3">CONSULTATION VÉNÉROLOGIE</h4>
							<p class="paragraph">
							Nous parlons sans tabous de votre sexualité afin de vous aider à prévenir et à guérir de vos infections sexuellement transmissibles. Vous apprendrez à éviter autant que possible les comportements sexuels à risque.
							</p>
						</div>
					</div>
					<div class="col-6 col-md-4">
						<div class="image">
						<img src="assets/img/coaching.jpg" width="350px" height="219px" alt="" title="">
						</div>
						<div class="desc">
							<h4 class="mb-3">CONSEILS DERMO-COSMÉTIQUES ET COACHING SUR MESURE</h4>
							<p class="paragraph">
							Nous vous accompagnons dans le choix de vos topiques qu'il s'agisse de vos cheveux ou de votre peaux pour avoir une solution adaptée à vous et à vos réalités. Nous aiderons à avoir des astuces pour être constants dans vos soins. contactez-nous !
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<footer class="footer">
		<div class="upper-footer">
			<div class="container">
				<div class="row">
					<div class="col-3">
						<a class="navbar-brand" href="#">Dermato as Ndere</a>
					</div>
					<div class="col-3">
						<h5>Dermato</h4>
							<ul>
								<li class=""><a href="#">A propos de nous</a></li>
								<li class=""><a href="#">Nos activites</a></li>
							</ul>
					</div>
					<div class="col-3">
						<h5>Aide</h5>
						<ul>
							<li class=""><a href="#">centre d'aide</a></li>
							<li class=""><a href="#">FAQ</a></li>
							<li class=""><a href="#">Blog</a></li>
						</ul>
					</div>
					<div class="col-3">
						<a class="mr-3" href=""><i class="fab fa-facebook-f"></i></a>
						<a class="mr-3" href=""><i class="fab fa-twitter"></i></a>
						<a class="mr-3" href=""><i class="fab fa-google"></i></a>
						<ul>
							<li class=""><a href="mailto:dermatoas@gmail.com">dermatoas@gmail.com</a></li>
							<li class=""><a href="#">009999999999</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<p>&copy;
							<script type="text/javascript">
								document.write(new Date().getFullYear());
							</script> Dermato as Ndere
						</p>
					</div>
					<div class="col-6 footer-link">
						<a class="bottom-footer-link" href="#">Privacy</a>&middot;
						<a class="bottom-footer-link" href="#">Accessibility</a>&middot;
						<a class="bottom-footer-link" href="#">Terms</a>
					</div>
					<div class="top-button"><a href="#top" class="top-scroll"><i class="fas fa-angle-up"></i></a></div>
				</div>
			</div>
		</div>
	</footer>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script>
		$(window).scroll(function () {
			$(".slideanim").each(function () {
				var pos = $(this).offset().top;

				var winTop = $(window).scrollTop();
				if (pos < winTop + 600) {
					$(this).addClass("slide");
				}
			});
		});
	</script>
</body>

</html>
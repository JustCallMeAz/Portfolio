<?php
	$skills = 
	[
		'Devlopment'=>
		[
			['skill'=>'PHP', 'color'=>'red','percentage'=>70],
			['skill'=>'MYSQL', 'color'=>'red','percentage'=>70],
			['skill'=>'NODEJS', 'color'=>'red','percentage'=>70],
		],
		'Technologie'=>
		[
			['skill'=>'TWIG', 'color'=>'red','percentage'=>70],
		],
		'Linux'=>
		[
			['skill'=>'SYSTEM', 'color'=>'red','percentage'=>70],
		],
		'Design'=>
		[
			['skill'=>'PhotoShop', 'color'=>'red','percentage'=>70],
			['skill'=>'Première Pro', 'color'=>'red','percentage'=>70],
		],
	];

	$portfolio = 
	[
		'Personnel'=>
		[
			['title'=>'Epreuve E6 - BTS SIO', 'img'=>'/assets/img/e6.jpg', 'text'=>'Le site prévu pour l\'épreuve E6 de mon BTS SIO.', 'href'=>'http://e6.clement-loire.fr/'],
			['title'=>'Landing Page', 'img'=>'/assets/img/landingpage.jpg', 'text'=>'Avant mon stage chez Texto l\'Agence, je n\'avais que de simples bases en programmation web. Ce stage m\'a initié à Bootsrap, Jquery, PHP, Javascript, Photoshop. J\'ai aussi acquéris une certaine logique de réflexion, "réflexion" qui distingue le programmeur du bon programmeur.', 'href'=>'/projects/landing-page/'],
			['title'=>'Mon portfolio V1', 'img'=>'/assets/img/perso-1.jpg', 'text'=>'La 1ère version de mon portfolio pesonnel, j\'ai appris l\'HTML et le CSS avec ce projet', 'href'=>'http://portfolio-v1.clement-loire.fr/'],
			['title'=>'Mon portfolio V2', 'img'=>'/assets/img/perso-2.jpg', 'text'=>'La 2ème version de mon portfolio pesonnel, j\'ai créez ce site afin de remettre à jour mon portfolio avec mes dernières connaissances.', 'href'=>'http://portfolio-v2.clement-loire.fr/'],
			['title'=>'Private', 'img'=>'/assets/img/private.jpg', 'text'=>'J\'ai créé ce repo après avoir terminé mon site web vitrine afin de poser mes projets et d\'y accéder depuis Internet. Un système de compte permet au monde entier d\'y accéder afin de profiter de mes projets.', 'href'=>'https://private.clement-loire.fr/'],
			['title'=>'Son of A Bitch', 'img'=>'/assets/img/sob.jpg', 'text'=>'Un site pour un ami loufoque.', 'href'=>'http://sonofabitch.fr/'],
		],
		'Professionnel'=>
		[
			['title'=>'Tomme de Savoie', 'img'=>'/assets/img/tommesavoie.jpg', 'text'=>'Le logo du site officiel de la Tomme de Savoie J\'ai pu "opérer" ce site lors de mon stage chez Texto l\'Agence, le logo du site à été mis à jour, j\'ai donc pu le changer en adaptant les dimensions pour garder le même layout.', 'href'=>'http://www.tomme-de-savoie.com/'],
			['title'=>'Saucisse de Morteau', 'img'=>'/assets/img/saucissemorteau.jpg', 'text'=>'Le site officiel de la Saucisse de Morteau J\'ai pu "opérer" ce site lors de mon stage chez Texto l\'Agence, j\'ai déplacer du code au bon endroit afin de faire fonctionner le clic sur les régions pour voir la vidéo descriptive. J\'ai aussi recenser les vidéos correspondant aux bonnes régions.', 'href'=>'http://www.saucissedemorteau.com/savoureuse/la-morteau-a-travers-les-regions'],
			['title'=>'Emmental de Savoie', 'img'=>'/assets/img/emmentalsavoie.jpg', 'text'=>'Le logo du site officiel de l\'Emmental de Savoie. J\'ai pu "opérer" ce site lors de mon stage chez Texto l\'Agence, le logo du site à été mis à jour, j\'ai donc pu le changer en adaptant les dimensions pour garder le même layout. Le logo de ce site est un png composé d\'inscription blanche car la couleur du background les fait ressortir.', 'href'=>'http://www.emmental-de-savoie.com/'],
			['title'=>'DCMedia', 'img'=>'/assets/img/dcmedia.jpg', 'text'=>'Un projet confidentiel qui m\'a été confié par DCSolution, entreprise dans laquelle je suis en alternance.', 'href'=>'https://dcmedia.ch/'],
			['title'=>'DCSolution', 'img'=>'/assets/img/incoming.png', 'text'=>'DCSolution site', 'href'=>'http://dcsolution.ch/'],
		]
	];
	$visitLink = 'Visiter';
?><!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Clément LOIRE | Portfolio</title>
		<meta charset="utf-8">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/materialize.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons|Fredoka+One" rel="stylesheet">
		<link href="/assets/img/favicon.ico" rel="shortcut icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<header>
			<nav class="nav-extended">
				<div class="nav-wrapper">
					<a href="/" class="brand-logo"><div class="personal-logo"><span>Clément</span>LOIRE</div></a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<!--<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="sass.html">Sass</a></li>
						<li><a href="badges.html">Components</a></li>
						<li><a href="collapsible.html">JavaScript</a></li>
					</ul>-->
					<ul class="side-nav" id="mobile-demo">
						<li><a href="sass.html">Sass</a></li>
						<li><a href="badges.html">Components</a></li>
						<li><a href="collapsible.html">JavaScript</a></li>
					</ul>
				</div>
				<div class="nav-content">
					<ul class="tabs tabs-transparent">
						<li class="tab"><a href="#about">About me</a></li>
						<li class="tab"><a href="#skills">Skills</a></li>
						<li class="tab"><a href="#portfolio">Portfolio</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<main>
			<div id="about">
				<div class="col s12">
					<div id="about-top">
						<div id="about-top-perso" class="circle z-depth-5"></div>
					</div>
					<div id="about-bottom" class="container">
						<p class="caption">Bienvenue sur mon incroyablement simple portfolio, retrouvez mon cv, mes créations et d'autres informations utiles</p>
						<div>
							<h2>Moi</h2>
							<p>Clément, <span id="age">..</span> ans, <strong>développeur web full-stack junior</strong> pour vous servir et améliorer le web.<br>Le développement en général m'intéresse depuis mes 10 ans, j'ai pu concrétiser cette envie lorsque j'étudiais mon <a href="">baccalauréat professionnel SEN TR</a> grâce à un ami qui m'a appris les bases du web.</p>
						</div>
						<div>
							<h2>Blabla</h2>
							<p>Some text about me</p>
						</div>
					</div>
				</div>
			</div>
			<div id="skills" class="container row">
				<?php foreach($skills as $skill=>$skillsContent){ ?>
				<div class="col s12 row">
					<h4><?=$skill;?></h4>
					<?php foreach($skillsContent as $skillsData){ ?>
					<div class="col s6">
						<h5><?=$skillsData['skill'];?></h5>
						<div class="progress">
							<div class="determinate" style="width: <?=$skillsData['percentage'];?>%;background-color: <?=$skillsData['color'];?>;"></div>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
			</div>
			<div id="portfolio" class="container row">
				<h3>Portfolio</h3>
				<?php foreach($portfolio as $type=>$portfolioContent){ ?>
				<div class="col s12 row">
					<h5><?=$type;?></h5>
					<?php foreach($portfolioContent as $portfolioData){ ?>
					<div class="col s12 m6 l3">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="<?=$portfolioData['img'];?>">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4"><?=$portfolioData['title'];?><i class="material-icons right">more_vert</i></span>
								<p><a target="blank" href="<?=$portfolioData['href'];?>"><?=$visitLink;?></a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4"><?=$portfolioData['title'];?><i class="material-icons right">close</i></span>
								<p class="black-text"><?=$portfolioData['text'];?></p>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
			</div>
		</main>
		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text"><div class="personal-logo"><span>Clément</span>LOIRE</div></h5>
						<p class="grey-text text-lighten-4">J'aime le partage et la création de site web, n'hésitez pas à me contacter pour tous projets web où autres propositions, je suis ouvert à tous.</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text"><a href="/contact/">Me contacter</a></h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="/contact/">Par email</a></li>
							<li><a class="grey-text text-lighten-3" href="https://github.com/AzeGalax">Github</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					2017 http://clement-loire.fr
				</div>
			</div>
		</footer>
	</body>
	<script type="text/javascript" src="/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/js/materialize.js"></script>
	<script type="text/javascript" src="/assets/js/init.js"></script>
</html>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Sanishop</title>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/src/css/theme.css" class="rel">
	<script
		src="http://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body <?php body_class(); ?>>
<nav class="nav">
	<div class="main-header-wrapper <?php echo is_page('Contact') ? 'black-header' : ''?>">
        <div class="main-logo">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/images/logo-transparent.png" alt="">
        </div>
        <a class="nav-link active" href="/sanishop">
            Accueil
        </a>
        <a class="nav-link" href="/sanishop/salles-de-bains">
            Salles de bain
        </a>
        <a class="nav-link" href="#">
            Installation de sanitaires
        </a>
        <a class="nav-link disabled" href="#">
            Spas Sauns Hammams JACUZZI®
        </a>
        <a class="nav-link disabled" href="/sanishop/contact">
            Contact
        </a>
	</div>
</nav>
<div class="btn-menu-trigger hidden-md hidden-lg">
	<i class="fas fa-bars" style="font-size:3em;color:#fff"></i>
</div>
<nav class="nav-mobile">
	<div class="btn-close-menu"></div>
	<div class="logo-mobile">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/images/logo-transparent-black.png" alt="">
	</div>
	<div class="main-header-wrapper">
		<a class="nav-link active" href="#">
			Accueil
			<span></span>
		</a>
		<a class="nav-link" href="#">
			Salles de bain
			<span></span>
		</a>
		<a class="nav-link" href="#">
			Installation de sanitaires
			<span></span>
		</a>
		<a class="nav-link disabled" href="#">
			Spas Sauns Hammams JACUZZI®
			<span></span>
		</a>
		<a class="nav-link disabled" href="#">
			Plomberie
			<span></span>
		</a>
	</div>
	<div class="header-icons">
		<i class="fab fa-facebook-f" style="font-size:1em;color:rgba(119,119,119,.6)"></i>
		<i class="fab fa-twitter" style="font-size:1em;color:rgba(119,119,119,.6)"></i>
		<i class="fab fa-google-plus-g" style="font-size:1em;color:rgba(119,119,119,.6)"></i>
		<i class="fas fa-phone" style="font-size:1em;color:rgba(119,119,119,.6)"></i>
		<i class="fas fa-envelope" style="font-size:1em;color:rgba(119,119,119,.6)"></i>
	</div>
</nav>
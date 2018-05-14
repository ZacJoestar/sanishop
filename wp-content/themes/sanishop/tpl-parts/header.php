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
<nav class="nav black-header">
	<div class="main-header-wrapper">
        <div class="main-logo">
            <a href="<?php echo site_url(); ?>/" alt="Sanishop" title="Sanishop">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/images/logo-transparent.png' ?>" alt="Sanishop Spa Jacuzzi Valenciennes" title="Sanishop Spa Jacuzzi Valenciennes">
            </a>
        </div>
        <ul class="nav-item-wrapper">
            <li>
                <a class="nav-link active" href="<?php echo site_url(); ?>/">
                Accueil
                </a>
            </li>
            <li class="trigger-sub-list">
                <a class="nav-link" href="#">Salle de bain</a>
                <ul class="nav-sub-list">
                    <li><a href="<?php echo site_url(); ?>/salle-de-bain"" class="nav-link">Création salle de bain</a></li>
                    <li><a class="nav-link disabled" href="<?php echo site_url(); ?>/chauffage">
                            CHAUFFAGE ET SOLUTIONS EAU CHAUDE
                        </a></li>
                </ul>
            </li>
            <li class="trigger-sub-list">
                <a class="nav-link" href="<?php echo site_url(); ?>/espace-wellness">Espace wellness</a>
                <ul class="nav-sub-list">
                    <li><a href="<?php echo site_url(); ?>/spa" class="nav-link">Spa Jacuzzi®</a></li>
                    <li><a class="nav-link disabled" href="<?php echo site_url(); ?>/Hammam">Hammam</a></li>
                    <li><a class="nav-link disabled" href="<?php echo site_url(); ?>/sauna">Sauna</a></li>
                </ul>
            </li>
            <li>
                <a class="nav-link disabled" href="<?php echo site_url(); ?>/contact">
                contact
                </a>
            </li>
        </ul>
	</div>
</nav>
<div class="btn-menu-trigger">
	<i class="fas fa-bars" style="font-size:3em;color:#fff"></i>
</div>
<nav class="nav-mobile">
	<div class="btn-close-menu"></div>
	<div class="logo-mobile">
        <a href="<?php echo site_url(); ?>/" alt="Sanishop" title="Sanishop"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/images/logo-transparent-black.png" alt=""></a>
	</div>
	<div class="main-header-wrapper">
		<a class="nav-link active" href="<?php echo site_url(); ?>/">
			Accueil
		</a>
		<a class="nav-link" href="<?php echo site_url(); ?>/salle-de-bain">
			Salle de bain
		</a>
		<a class="nav-link" href="<?php echo site_url(); ?>/espace-wellness">
			Espace wellness
		</a>
		<a class="nav-link disabled" href="<?php echo site_url(); ?>/spa">
			Spa
		</a>
		<a class="nav-link disabled" href="<?php echo site_url(); ?>/sauna">
			Sauna
		</a>
        <a class="nav-link disabled" href="<?php echo site_url(); ?>/hammam">
            Hammam
        </a>
        <a class="nav-link disabled" href="<?php echo site_url(); ?>/chauffage">
            CHAUFFAGE ET SOLUTIONS EAU CHAUDE
        </a>
        <a class="nav-link disabled" href="<?php echo site_url(); ?>/contact">
            contact
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
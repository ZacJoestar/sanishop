<?php
/**
 * Template Name: Contact
 * Created by PhpStorm.
 * User: zac
 * Date: 04/03/2018
 * Time: 14:38
 */
?>

<?php get_template_part('tpl-parts/header'); ?>
<div class="container-fluid">
    <div class="row">
        <style>
            #map {
                height: 600px;
                width: 100%;
            }
        </style>
        <div id="map"></div>
        <script>
            function initMap() {
                var uluru = {lat: 50.3576727, lng: 3.5237527};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    styles:[
                        {
                            "featureType": "administrative.province",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 65
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 51
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 30
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 40
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "hue": "#ffff00"
                                },
                                {
                                    "lightness": -25
                                },
                                {
                                    "saturation": -97
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "lightness": -25
                                },
                                {
                                    "saturation": -100
                                }
                            ]
                        }
                    ],
                    center: uluru
                });

                var image = '<?= esc_url( get_template_directory_uri() ); ?>/src/images/pin.png';
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    icon: image,
                    draggable: true,
                    animation: google.maps.Animation.DROP
                });
                marker.addListener('click', toggleBounce);
            }

            function toggleBounce() {
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }

        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDi1NN2uqb7OlNZ4NyqC2sSyI-tmDzQjTY&callback=initMap">
        </script>
    </div>
</div>
<div class="container-fluid contact-infos-wrapper">
    <div class="row">
        <div class="col-md-12 col-xs-12 col-lg-6 text-center form-wrapper">
            <h3 class="sub-title">Partagez vos impressions</h3>
            <h2 class="title-second">Écrivez-nous</h2>
            <div class="form-container">
                <form class="form-horizontal" method="post" action="<?php the_permalink(); ?>">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" placeholder="Nom" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="message_prenom" value="<?php echo esc_attr($_POST['message_prenom']); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="tel" class="form-control" id="tel" placeholder="Téléphone" name="message_num" value="<?php echo esc_attr($_POST['message_num']); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea class="form-control" rows="3" placeholder="Votre message" name="message_text" value="<?php echo esc_attr($_POST['message_text']); ?>"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" placeholder="Entrez le chiffre 2 pour confirmez que vous n'êtes pas un robot" name="message_human">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-default">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
	            <?php echo $response; ?>
        </div>
        <div class="col-md-12 col-xs-12 col-lg-6 contact-infos text-center">
            <h3 class="sub-title mt-10">Restons en contact</h3>
            <h2 class="title-second--white">Coordonnées</h2>
            <p class="paragraph--white mt-3 mb-3">
                Sani Shop, situé à Valenciennes, est spécialiste de la vente et de l'installation de tous les équipements de salles de bains. Nos professionnels interviennent à domicile pour toutes installations et dépannages à Valenciennes, Saint-Amand-les-Eaux et dans toute la région des Hauts-de-France.
            </p>
            <p class="paragraph--white mt-3 mb-1">
                <b><u>Adresse:</u></b> 40 Rue du Quesnoy, 59300, Valenciennes
            </p>
            <p class="paragraph--white mb-1">
                <b><u>Téléphone:</u></b> 40 Rue du Quesnoy, 59300, Valenciennes
            </p>
            <p class="paragraph--white mb-1">
                <b><u>Email:</u></b> <a href="mailto:info@sanishop.fr" class="mailto">info@sanishop.fr</a>
            </p>

        </div>
    </div>
</div>
<?php get_template_part('tpl-parts/footer'); ?>

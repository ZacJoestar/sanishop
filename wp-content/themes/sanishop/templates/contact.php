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
	            <?php echo do_shortcode('[contact-form-7 id="28" title="Contact form 1"]'); ?>
            </div>
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

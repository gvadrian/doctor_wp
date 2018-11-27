<?php

/**
 * Template Name: Contacts
 */

get_header();
$fields = get_fields();
?>
    <main>
        <div class="contacts__page">
            <div class="contacts__wrap">
                <div class="contacts__left">
                    <div class="contacts__width">

                        <div class="contacts__tablet-left">
                            <div class="contacts__header">
                                <h2 class="contacts__h2"><?=$fields['title']?></h2>
                                <div class="contacts__pointer pointer__wrap">
                                    <div class="contacts__square pointer__square-light">
                                    </div>
                                </div>
                            </div>
                            <div class="contacts__left-address">
                                <div class="contacts__street"><?=$fields['address']?></div>
                                <div class="contacts__email">E-mail: <?=$fields['email']?></div>
                            </div>
                            <div class="contacts__left-hours contacts__border-bottom">
                                <div class="contacts__timetable"><?=$fields['schedule']['title']?></div>
                                <div class="contacts__timetable-wrap">
                                    <div class="contacts__days">
                                        <?php foreach ($fields['schedule']['days-time'] as $item) :?>
                                            <div class="contacts__day contacts__week"><?=$item['days']?></div>
                                        <?php endforeach?>
                                    </div>
                                    <div class="contacts__underl-wrap">
                                        <?php foreach ($fields['schedule']['days-time'] as $item) :?>
                                            <div class="contacts__underline"></div>
                                        <?php endforeach?>
                                    </div>
                                    <div class="contacts__hours">
                                        <?php foreach ($fields['schedule']['days-time'] as $item) :?>
                                            <div class="contacts__hour"><?=$item['time']?></div>
                                        <?php endforeach?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="contacts__tablet-right">
                            <?php $i = 1?>
                            <?php foreach ($fields['additional_info'] as $info) :?>
                                <div class="contacts__left-interview <?=($i !== count($fields['additional_info'])) ? 'contacts__border-bottom' : ''?>">
                                    <div class="contacts__subheader"><?=$info['title']?></div>
                                    <div class="contacts__timetable-wrap">
                                        <div class="contacts__email">
                                            <div class="contacts__email-address"><?=$info['content']?></div>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++?>
                            <?php endforeach?>
                        </div>
                    </div>
                </div>
                <div id="contacts__right">
                </div>
            </div>
    </main>
<?php get_footer();?>
<script>
    function initMap() {

        var drDenLatLang = new google.maps.LatLng(<?=$fields['map']['lat']?>, <?=$fields['map']['lng']?>);
        var map = new google.maps.Map(
            document.getElementById('contacts__right'), {
                zoom: 17,
                center: {lat: <?=$fields['map']['lat']?>-0.0003, lng: <?=$fields['map']['lng']?>+0.003},
                styles: [
                    {
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#bdbdbd"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#eeeeee"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e5e5e5"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dadada"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e5e5e5"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#eeeeee"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#c9c9c9"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    }
                ]
            });
        var marker = new google.maps.Marker({ position: drDenLatLang, map: map });
    };
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYLC1KTRLWzjrBWIXUL9F0TYI9VGUH2ZU&callback=initMap"></script>

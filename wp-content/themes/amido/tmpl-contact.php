<?php
/*
 * Template Name: Contact Us
 */
get_header(); ?>
    <script src="//maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
<?php
?>

    <section class="intro">
        <div class="holder">
            <h1><span>contact<br>us</span></h1>
            <div class="btn-holder">
                <a href="#" class="btn-plus">Plus</a>
            </div>
        </div>
    </section>
    <div id="main">
        <section class="biography holder">
            <header class="intro-text">
                <h2><?php the_field( 'contact.main_contact.title' ); ?></h2>
                <p><?php the_field( 'contact.main_contact.subtitle' ) ?></p>
            </header>
            <div class="frame">
                <div class="person-profile">
                    <?php
                        $team_member = get_field( 'contact.main_contact.team_member' );
                    ?>
                    <a href="#" class="photo">
                        <img src="<?php echo wp_get_attachment_image_src( get_field('team_member_image', $team_member->ID) )[0] ?>" alt="<?php echo strtoupper( $team_member->post_title ); ?>">
                        <span class="hover">&nbsp;</span>
                    </a>
                    <div class="person-info">
                        <h3><?php echo strtoupper( $team_member->post_title ); ?></h3>
                        <span class="author"><?php the_field( 'job_title', $team_member->ID ); ?><br><?php the_field( 'team_member_city', $team_member->ID ); ?></span>
                        <dl class="info-list">
                            <dt>Phone:</dt>
                            <dd><?php the_field( 'phone_number', 'options' ) ?></dd>
                            <dt>Email:</dt>
                            <dd><a href="mailto:<?php the_field( 'team_member_email', $team_member->ID ) ?>"><?php the_field( 'team_member_email', $team_member->ID ) ?></a></dd>
                        </dl>
                    </div>
                </div>
                <div class="description">
                    <h3>BIOGRAPHY</h3>
                    <p><?php echo $team_member->post_content ?></p>
                </div>
            </div>
        </section>
        <section class="location grey">
            <div class="holder">
                <header class="intro-text">
                    <h2><?php the_field('contact.offices.title') ?></h2>
                    <p><?php the_field('contact.offices.subtitle') ?></p>
                </header>
            </div>
            <div class="block-holder">
                <?php
                    if( have_rows( 'contact.offices.offices' ) ):
                        $count = 1;
                        while( have_rows( 'contact.offices.offices' ) ): the_row(); ?>
                            <div class="block">
                                <div class="frame">
                                    <h3><?php the_sub_field('contact.offices.offices.name') ?></h3>
                                    <div class="contact-area">
                                        <address><?php the_sub_field('contact.offices.offices.address') ?></address>
                                        <dl class="info-list">
                                            <dt>Phone:</dt>
                                            <dd><?php the_sub_field('contact.offices.offices.phone') ?></dd>
                                            <dt>Email:</dt>
                                            <dd><a href="mailto:<?php the_sub_field('contact.offices.offices.email') ?>"><?php the_sub_field('contact.offices.offices.email') ?></a></dd>
                                        </dl>
                                    </div>
                                </div>
                                <div id="map-holder-<?php echo $count ?>" class="map-holder">

                                </div>
                            </div>
                            <script>
                                $ = jQuery;
                                $(document).ready(function() {
                                    var $mapHolder = $("#map-holder-<?php echo $count ?>");
                                    $mapHolder.width("100%");
                                    $mapHolder.height($mapHolder.width() / 2)
                                    var offset = !!(<?php echo $count ?> % 2) ? -0.005 : 0.005;
                                    //------- Google Maps ---------//
                                    var latitude = <?php the_sub_field('contact.offices.offices.latitude') ?>;
                                    var longitude = <?php the_sub_field('contact.offices.offices.longitude') ?>;
                                    // Creating a LatLng object containing the coordinate for the center of the map
                                    var latlng = new google.maps.LatLng(latitude,longitude + offset);

                                    // Creating an object literal containing the properties we want to pass to the map
                                    var options = {
                                        zoom: 15, // This number can be set to define the initial zoom level of the map
                                        center: latlng,
                                        mapTypeId: google.maps.MapTypeId.ROADMAP, // This value can be set to define the map type ROADMAP/SATELLITE/HYBRID/TERRAIN
                                        mapTypeControlOptions: {
                                            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'tehgrayz']
                                        }
                                    };
                                    // Calling the constructor, thereby initializing the map
                                    var map = new google.maps.Map(document.getElementById('map-holder-<?php echo $count ?>'), options);

                                    var stylez = [
                                        {
                                            featureType: "all",
                                            elementType: "all",
                                            stylers: [
                                                { saturation: -100 } // <-- THIS
                                            ]
                                        }
                                    ];
                                    var mapType = new google.maps.StyledMapType(stylez, { name:"Grayscale" });
                                    map.mapTypes.set('tehgrayz', mapType);
                                    map.setMapTypeId('tehgrayz');

                                    // Define Marker properties
                                    var image = new google.maps.MarkerImage('<?php bloginfo('stylesheet_directory'); ?>/images/pointer.png',
                                        // This marker is 129 pixels wide by 42 pixels tall.
                                        new google.maps.Size(48, 73),
                                        // The origin for this image is 0,0.
                                        new google.maps.Point(0,0),
                                        // The anchor for this image is the base of the flagpole at 18,42.
                                        new google.maps.Point(24, 73)
                                    );

                                    // Add Marker
                                    var city = new google.maps.Marker({
                                        position: new google.maps.LatLng(<?php the_sub_field('contact.offices.offices.latitude') ?>,<?php the_sub_field('contact.offices.offices.longitude') ?>),
                                        map: map,
                                        icon: image // This path is the custom pin to be shown. Remove this line and the proceeding comma to use default pin
                                    });

                                    <?php
                                        $parsed_address=str_replace(array('.', "\n", "\t", "\r"), '', get_sub_field('contact.offices.offices.address'));
                                        $parsed_address_no_breaks= str_replace(' ', '+', str_replace('<br />', ',', $parsed_address));
                                     ?>

                                    var infowindow1 = new google.maps.InfoWindow({
                                        content:  createInfo('Amido - <?php the_sub_field('contact.offices.offices.name') ?> Office', '<br/><?php echo $parsed_address ?><br/><a href=javascript:window.open("http://maps.google.co.uk/maps?hl=en&gl=uk&daddr=<?php echo $parsed_address_no_breaks ?>&panel=1&f=d&fb=1&dirflg=d'+latitude+','+longitude+'&geocode='+latitude+','+longitude+'")>Click for directions</a>')
                                    });

                                    // Add listener for a click on the pin
                                    google.maps.event.addListener(city, 'click', function() {
                                        infowindow1.open(map, city);
                                    });

                                    // Create information window
                                    function createInfo(title, content) {
                                        return '<div class="infowindow"><strong>'+ title +'</strong>'+content+'</div>';
                                    }

                                });
                            </script>
                        <?php $count++;
                        endwhile;endif; ?>
            </div>
        </section>

        <?php
            $do_query = true;
            include('includes/inc-senior-team.php');
            include('includes/inc-contact-summary.php'); ?>

<?php
get_footer();
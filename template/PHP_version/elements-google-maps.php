<?php
$page = 'elements';
$title = 'Google Maps | Archtek.';
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>

        <?php
        include_once ('template-html-head.php');
        ?>
    </head>

    <body>

        <?php
        include_once ('template-header.php');
        ?>

        <!-- Header Image -->
        <div id="header-image-container">
            <div id="header-image">
                <img src="images/placeholders/2000x330.gif" alt="" class="stretch-image" />
            </div>
        </div>

        <div id="content-container" class="content-width">

            <!-- Breadcrumbs -->
            <div class="row">
                <div id="breadcrumbs-wrapper" class="large-12 columns for-nested">
                    <span>You are here:</span>
                    <ul class="breadcrumbs">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="current">
                            <a href="#">Elements</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Page Intro -->
            <div id="intro" class="not-homepage row">
                <div class="large-9 large-centered columns">
                    <h1><strong>Google Maps</strong></h1>
                </div>
            </div>

            <div class="row">
                <div class="large-12 columns no-padding-bottom">
                   <h3>Roadmap View (Default)</h3>
                   <div class="google-map" data-latlng="-24.447150, 133.75634" data-address="New York, US" data-display-type="ROADMAP" data-zoom-level="16" data-height="250"></div>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    
                    <div class="row">
                        
                        <div class="large-8 columns less-padding">
                            <h3>Satellite View</h3>
                            <div class="google-map" data-latlng="-24.447150, 133.75634" data-address="New York, US" data-display-type="SATELLITE" data-zoom-level="16" data-height="500"></div>
                        </div>
                        <div class="large-4 columns for-nested">
                            
                            <div class="row">
                                <div class="large-12 columns less-padding">
                                    <h3>Hybrid View</h3>
                                    <div class="google-map" data-latlng="-24.447150, 133.75634" data-address="New York, US" data-display-type="HYBRID" data-zoom-level="16" data-height="210"></div>
                                </div>
                            </div>
                            <br/><br/>
                            <div class="row">
                                <div class="large-12 columns less-padding">
                                    <h3>Terrain View</h3>
                                    <div class="google-map" data-latlng="-24.447150, 133.75634" data-address="New York, US" data-display-type="TERRAIN" data-zoom-level="16" data-height="210"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
             
        </div>
        <!-- End id="content-container" -->

        <?php
        include_once ('template-footer.php');
        ?>

        <?php
        include_once ('template-js.php');
        ?>
    </body>
</html>

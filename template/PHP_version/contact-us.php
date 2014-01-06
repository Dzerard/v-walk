<?php
$page = 'contact';
$title = 'Contact Us | Archtek.';
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
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Page Intro -->
            <div id="intro" class="not-homepage row">
                <div class="large-9 large-centered columns">
                    <h1><strong>Contact</strong> Us</h1>
                </div>
            </div>

            <!-- Page Content -->
            <div class="grey-bg row">
                <div class="large-3 columns for-nested">
                    <div class="row">
                        <div class="large-12 columns no-padding height-255">
                            <img src="images/placeholders/255x330.gif" alt="" class="stretch-image" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns grey-bg">
                            <div class="contact-info-widget">
                                <h3>Contact Info</h3>
                                <p>
                                    Ut enim ad minim veniam consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <p>
                                    456 Fifth Avenue, 39th floor. New York, USA
                                </p>
                                <ul>
                                    <li>
                                        <i class="icon-phone"></i>+123.456.789
                                    </li>
                                    <li>
                                        <i class="icon-mobile-phone"></i>+123.999.899
                                    </li>
                                    <li>
                                        <i class="icon-envelope-alt"></i><a href="#">contact@archtek.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="large-9 columns for-nested">
                    <div class="row">
                        <div class="large-12 columns no-padding">
                            <div class="google-map" data-latlng="-24.447150, 133.75634" data-address="New York, US" data-display-type="ROADMAP" data-zoom-level="16" data-height="330"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <h3 class="blog-section-title">Message Form</h3>
                            <p>
                                Praesent sollicitudin ligula a magna consectetur commodo. Integer id urna dui. Vestibulum ornare orci eget dolor laoreet placerat. Suspendisse eu enim dui, a varius tortor. 
                            </p>
                            <form id="contact-form" method="post" class="validate">
                                <div class="row">
                                    <div class="large-5 columns less-padding">
                                        <label for="name">Name</label>
                                        <input class="validate[required]" type="text" name="name" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-5 columns less-padding">
                                        <label for="email">Email</label>
                                        <input class="validate[required,custom[email]]" type="text" name="email" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-5 columns less-padding">
                                        <label for="subject">Subject</label>
                                        <input class="validate[required]" type="text" name="subject" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-12 columns less-padding">
                                        <label for="message">Message</label>
                                        <textarea class="validate[required]" name="message" style="height: 120px;"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-5 columns less-padding">
                                        <input type="submit" class="flat button" value="Submit" />
                                    </div>
                                </div>
                            </form>
                            <div id="success" class="success box">
                                Thank you. We have received your message and will contact you back shortly.
                            </div>
                            <div id="error" class="error box">
                                Something went wrong. Please contact us via email or phone. We truly apologize for the inconvenience.
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

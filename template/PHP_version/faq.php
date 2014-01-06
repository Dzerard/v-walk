<?php
$page = 'others';
$title = 'FAQ | Archtek.';
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
                            <a href="#">Other Pages</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Page Intro -->
            <div id="intro" class="not-homepage row">
                <div class="large-9 large-centered columns">
                    <h1><strong>Frequently</strong> Asked Questions</h1>
                </div>
            </div>

            <!-- Page Content -->
            <div class="row grey-bg">
                <div class="large-9 columns white-bg">
                    <div class="accordion" data-active-index="0">
                        <h4><a href="#">What kind of service do you provide?</a></h4>
                        <div>
                            <p>
                                Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                            </p>
                        </div>
                        <h4><a href="#">How to get after-sales support?</a></h4>
                        <div>
                            <p>
                                <img src="images/placeholders/510x255.gif" alt="" />
                            </p>
                            <p>
                                Sed lacinia lorem facilisis augue dictum semper vestibulum nulla accumsan. Sed sit amet dolor sem. Nam adipiscing dolor vel arcu vehicula et aliquam mi rhoncus. Duis volutpat ornare tellus quis venenatis.
                            </p>
                        </div>
                        <h4><a href="#">How to contact you?</a></h4>
                        <div>
                            <div class="embed">
                                <iframe src="http://player.vimeo.com/video/24535181?api=1&title=0&byline=0&portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                            </div>
                        </div>
                        <h4><a href="#">Does your support cover the customization request?</a></h4>
                        <div>
                            <p>
                                Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                            </p>
                        </div>
                        <h4><a href="#">What about the warranty of your services?</a></h4>
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <h4><a href="#">Can I return the goods in case I am not satisfied?</a></h4>
                        <div>
                            <p>
                                Sed lacinia lorem facilisis augue dictum semper vestibulum nulla accumsan. Sed sit amet dolor sem. Nam adipiscing dolor vel arcu vehicula et aliquam mi rhoncus. Duis volutpat ornare tellus quis venenatis.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="large-3 columns grey-bg">
                    <h3>Did not find the answers?</h3>
                    <p>
                        In case you have not found any answers here or you have more inquiries to ask, please feel free to drop us a message and we will contact you back very soon.
                    </p>
                    <a href="contact-us.php" class="flat button">Contact Us</a>
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

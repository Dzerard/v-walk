<?php
$page = 'elements';
$title = 'Images and Videos | Archtek.';
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
                    <h1><strong>Images</strong> and <strong>Videos</strong></h1>
                </div>
            </div>

            <div class="row">
                <div class="large-12 columns">
                    <h2 class="has-line">Images</h2>
                    <div class="row">
                        <div class="large-4 columns less-padding">
                            <h3>Normal Image</h3>
                            <img src="images/placeholders/255x255.gif" alt="" />
                        </div>
                        <div class="large-4 columns less-padding">
                            <h3>Clickable Image (Link)</h3>
                            <a href="http://themeforest.net/user/UXbarn?ref=UXbarn" class="clickable-image" target="_blank"><img src="images/placeholders/255x255.gif" alt="" /></a>
                        </div>
                        <div class="large-4 columns less-padding">
                            <h3>Clickable Image (Lightbox)</h3>
                            <a href="images/placeholders/255x255.gif" class="clickable-image image-box"><img src="images/placeholders/255x255.gif" alt="" /></a>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="row top-margin">
                <div class="large-12 columns">
                    <h2 class="has-line">Videos</h2>
                    <div class="row">
                        <div class="large-6 columns less-padding">
                            <h3>Vimeo</h3>
                            <div class="embed">
                                <iframe src="http://player.vimeo.com/video/23534361?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                            </div>
                        </div>
                        <div class="large-6 columns less-padding">
                            <h3>YouTube</h3>
                            <div class="embed">
                                <iframe src="http://www.youtube.com/embed/G_G8SdXktHg?wmode=opaque" frameborder="0" allowfullscreen></iframe>
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

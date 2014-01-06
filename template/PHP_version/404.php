<?php
$page = 'others';
$title = 'Page Not Found | Archtek.';
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
                    <h1>404 <strong>Page Not Found</strong></h1>
                    <p>
                        Your requested page could not be found or it is currently unavailable. 
                        <br/>
                        Please <a href="#">click here</a> to go back to our home page or use the search form below.
                    </p>
                </div>
            </div>
            <div class="row no-margin no-bg">
                <div class="large-6 columns no-bg no-padding large-centered">
                  <div class="row collapse no-bg">
                    <div class="small-10 columns no-bg no-padding">
                      <input type="text" placeholder="Search ...">
                    </div>
                    <div class="small-2 columns no-bg no-padding">
                      <a href="#" class="flat button prefix"><i class="icon-search"></i></a>
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

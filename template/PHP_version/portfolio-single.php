<?php
$page = 'portfolio';
$title = 'Portfolio Single Page | Archtek.';
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
                        <li>
                            <a href="#">Portfolio List</a>
                        </li>
                        <li class="current">
                            <a href="#">Single Page</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Page Intro -->
            <div id="intro" class="not-homepage row">
                <div class="large-9 large-centered columns">
                    <h1>Clean <strong>Wooden Kitchen</strong></h1>
                </div>
            </div>

            <!-- Portfolio Info -->
            <div class="row">
                <div class="large-12 columns no-padding">
                    <div id="portfolio-item-images">
                        <div>
                            <a href="images/placeholders/1020x500.gif" class="image-box" title="Natural Touch" rel="portfolio-image-group"><img src="images/placeholders/1020x500.gif" alt="" /></a>
                        </div>
                        <div>
                            <a href="images/placeholders/1020x500.gif" class="image-box" title="Beautiful Upscale Kitchen" rel="portfolio-image-group"><img src="images/placeholders/1020x500.gif" alt="" /></a>
                        </div>
                        <div>
                            <a href="images/placeholders/1020x500.gif" class="image-box" title="Vintage Style" rel="portfolio-image-group"><img src="images/placeholders/1020x500.gif" alt="" /></a>
                        </div>
                    </div>
                    <div id="portfolio-item-images-controller">
                        <a href="#" id="portfolio-item-images-prev"><i class="icon-angle-left"></i></a>
                        <a href="#" id="portfolio-item-images-next"><i class="icon-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div id="portfolio-item-info-wrapper" class="row">
                <div id="portfolio-item-info" class="large-3 columns no-padding">
                    <ul id="portfolio-item-meta">
                        <li>
                            <i class="icon-calendar"></i><strong>Date</strong>
                            <p>
                                March 15, 2013
                            </p>
                        </li>
                        <li>
                            <i class="icon-user"></i><strong>Client</strong>
                            <p>
                                Smart Living Co., Ltd.
                            </p>
                        </li>
                        <li>
                            <i class="icon-tags"></i><strong>Categories</strong>
                            <ul id="portfolio-item-categories">
                                <li>
                                    <a href="#">Interior</a>
                                </li>
                                <li>
                                    <a href="#">Kitchen</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <i class="icon-globe"></i><strong>Website</strong>
                            <p>
                                <a href="#">www.smart-living.com</a>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="large-9 columns">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                    </p>
                </div>
            </div>

            <!-- Related Items -->
            <div class="row top-margin">
                <div class="large-12 columns bottom-line">
                    <h3 class="no-margin">Related Projects</h3>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns for-nested portfolio-wrapper">
                    <div class="portfolio-item">
                        <div class="portfolio-item-hover">
                            <h3><a href="portfolio-single-video.php">New Sense Bathroom</a></h3>
                            <ul>
                                <li>
                                    <a href="#">Room</a>
                                </li>
                                <li>
                                    <a href="#">Mock-up</a>
                                </li>
                            </ul>
                        </div>
                        <img src="images/placeholders/255x255.gif" alt="" class="stretch-image" />
                    </div>
                    <div class="portfolio-item">
                        <div class="portfolio-item-hover">
                            <h3><a href="portfolio-single-video.php">Open-Style &amp; Modern Living Room</a></h3>
                            <ul>
                                <li>
                                    <a href="#">Mock-up</a>
                                </li>
                            </ul>
                        </div>
                        <img src="images/placeholders/255x255.gif" alt="" class="stretch-image" />
                    </div>
                    <div class="portfolio-item">
                        <div class="portfolio-item-hover">
                            <h3><a href="portfolio-single-video.php">Comfortable Brown Sofa</a></h3>
                            <ul>
                                <li>
                                    <a href="#">Furniture</a>
                                </li>
                                <li>
                                    <a href="#">Room</a>
                                </li>
                            </ul>
                        </div>
                        <img src="images/placeholders/255x255.gif" alt="" class="stretch-image" />
                    </div>
                    <div class="portfolio-item">
                        <div class="portfolio-item-hover">
                            <h3><a href="portfolio-single-video.php">Glassy White Room</a></h3>
                            <ul>
                                <li>
                                    <a href="#">Room</a>
                                </li>
                            </ul>
                        </div>
                        <img src="images/placeholders/255x255.gif" alt="" class="stretch-image" />
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

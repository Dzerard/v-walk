<?php
$page = 'portfolio';
$title = 'Our Projects | Archtek.';
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
                            <a href="#">Portfolio List</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Page Intro -->
            <div id="intro" class="not-homepage row">
                <div class="large-9 large-centered columns">
                    <h1>Our <strong>Quality</strong> Projects</h1>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                    </p>
                </div>
            </div>

            <!-- Portfolio -->
            <div class="row">
                <div class="large-12 columns no-padding">
                    
                    <div class="portfolio-wrapper">

                        <div class="portfolio-item fixed-box">
                            <h2 class="smaller">Select Categories:</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </p>
                            <p>
                                <form id="portfolio-filter-wrapper" class="custom">
                                    <select id="portfolio-filter" class="medium">
                                        <option selected="selected" value="*">All Categories</option>
                                        <option value=".furniture">Furniture</option>
                                        <option value=".interior">Interior</option>
                                        <option value=".kitchen">Kitchen</option>
                                        <option value=".mockup">Mockup</option>
                                        <option value=".room">Room</option>
                                    </select>
                                </form>
                            </p>
                        </div>
    
                        <div class="kitchen mockup portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="portfolio-single.php">Modern Kitchen Development</a></h3>
                                <ul>
                                    <li>
                                        <a href="#">Kitchen</a>
                                    </li>
                                    <li>
                                        <a href="#">Mock-up</a>
                                    </li>
                                </ul>
                            </div>
                            <img src="images/placeholders/255x255.gif" alt="" class="stretch-image" />
                        </div>
                        <div class="furniture interior portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="portfolio-single.php">Creamy Living Room</a></h3>
                                <ul>
                                    <li>
                                        <a href="#">Furniture</a>
                                    </li>
                                    <li>
                                        <a href="#">Interior</a>
                                    </li>
                                </ul>
                            </div>
                            <img src="images/placeholders/255x255.gif" alt="" class="stretch-image" />
                        </div>
    
                        <div class="room interior portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="portfolio-single.php">New Sense Bathroom</a></h3>
                                <ul>
                                    <li>
                                        <a href="#">Interior</a>
                                    </li>
                                    <li>
                                        <a href="#">Room</a>
                                    </li>
                                </ul>
                            </div>
                            <img src="images/placeholders/255x255.gif" alt="" class="stretch-image" />
                        </div>
                        <div class="interior mockup room portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="portfolio-single.php">Open-Style &amp; Modern Living Room</a></h3>
                                <ul>
                                    <li>
                                        <a href="#">Interior</a>
                                    </li>
                                    <li>
                                        <a href="#">Mock-up</a>
                                    </li>
                                    <li>
                                        <a href="#">Room</a>
                                    </li>
                                </ul>
                            </div>
                            <img src="images/placeholders/255x255.gif" alt="" class="stretch-image" />
                        </div>
                        <div class="interior mockup furniture portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="portfolio-single.php">Comfortable Brown Sofa</a></h3>
                                <ul>
                                    <li>
                                        <a href="#">Furniture</a>
                                    </li>
                                    <li>
                                        <a href="#">Interior</a>
                                    </li>
                                    <li>
                                        <a href="#">Mock-up</a>
                                    </li>
                                </ul>
                            </div>
                            <img src="images/placeholders/255x255.gif" alt="" class="stretch-image" />
                        </div>
                        <div class="kitchen interior portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="portfolio-single.php">Clean Wooden Kitchen</a></h3>
                                <ul>
                                    <li>
                                        <a href="#">Interior</a>
                                    </li>
                                    <li>
                                        <a href="#">Kitchen</a>
                                    </li>
                                </ul>
                            </div>
                            <img src="images/placeholders/255x255.gif" alt="" class="stretch-image" />
                        </div>
    
                        <div class="furniture interior portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="portfolio-single.php">The Yellow Couch</a></h3>
                                <ul>
                                    <li>
                                        <a href="#">Furniture</a>
                                    </li>
                                    <li>
                                        <a href="#">Interior</a>
                                    </li>
                                </ul>
                            </div>
                            <img src="images/placeholders/255x255.gif" alt="" class="stretch-image" />
                        </div>
                        <div class="interior portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="portfolio-single.php">Pleasant Sitting Room</a></h3>
                                <ul>
                                    <li>
                                        <a href="#">Interior</a>
                                    </li>
                                </ul>
                            </div>
                            <img src="images/placeholders/255x255.gif" alt="" class="stretch-image" />
                        </div>
                        <div class="room portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="portfolio-single.php">Glassy White Room</a></h3>
                                <ul>
                                    <li>
                                        <a href="#">Room</a>
                                    </li>
                                </ul>
                            </div>
                            <img src="images/placeholders/255x255.gif" alt="" class="stretch-image" />
                        </div>
                        <div class="room mockup portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="portfolio-single.php">The Private Bedroom</a></h3>
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
                    
                    </div>

                </div>
            </div>

            <div class="row top-margin">
                <div class="large-12 columns bottom-line">
                    <h2 class="smaller no-margin">Feedbacks From Our Customers</h2>
                </div>
            </div>

            <!-- Testimonial Slider -->
            <div class="row no-bg">
                <div class="large-12 columns height-255 no-padding">
                    
                    <div class="testimonial-wrapper">
                        <div class="testimonial-inner">
                            <div class="testimonial-list">
                                <div>
                                    <blockquote>
                                        <p>
                                            Nunc feugiat mi a tellus at consequat. Proinquam. Etiam ultrices. Suspendisse in justo sit etiam magna luctus suscipit.
                                        </p>
                                        <cite> Richard Jones, Arch Era Magazine </cite>
                                    </blockquote>
                                    <img src="images/placeholders/255x255.gif" alt="" />
                                </div>
                                <div>
                                    <blockquote>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit!
                                        </p>
                                        <cite> Balmer Family, New York </cite>
                                    </blockquote>
                                    <img src="images/placeholders/255x255.gif" alt="" />
                                </div>
                                <div>
                                    <blockquote>
                                        <p class="smaller">
                                            Curabitur sodales ligula in libero. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor.
                                        </p>
                                        <cite> Steve Woodman, Agency </cite>
                                    </blockquote>
                                    <img src="images/placeholders/255x255.gif" alt="" />
                                </div>
                            </div>
                            <div class="testimonial-angle"></div>
                            <div class="testimonial-corner"></div>
                            <div class="testimonial-corner-mirror"></div>
                        </div>
                        <div class="testimonial-bullets"></div>
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

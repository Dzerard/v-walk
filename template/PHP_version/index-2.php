<?php
$page = 'home';
$title = 'Archtek. | The modern template for your business.';
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

        <!-- Home Slider Container -->
        <div id="home-slider-container">

            <div id="home-slider">
                <div class="home-slider-item">
                    <img src="images/placeholders/1960x624.gif" class="stretch-image" alt="Slide 1" />
                    <div class="slider-caption">
                        <h2>Great development.</h2>
                        <p>
                            Natus error sit voluptatem accusantium doloremque.
                        </p>
                    </div>
                </div>
                <div class="home-slider-item">
                    <img src="images/placeholders/1960x624.gif" class="stretch-image" alt="Slide 2" />
                    <div class="slider-caption">
                        <h2>We create &amp; deliver great design.</h2>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
                        </p>
                    </div>
                </div>
                <div class="home-slider-item">
                    <img src="images/placeholders/1960x624.gif" class="stretch-image" alt="Slide 3" />
                </div>
            </div>
            <div id="slider-controller" class="content-width">
                <a href="#" id="slider-prev"><i class="icon-angle-left"></i></a>
                <a href="#" id="slider-next"><i class="icon-angle-right"></i></a>
            </div>
            <div id="header-image-shadow" class="content-width"></div>

        </div>
        <!-- End id="home-slider-container" -->

        <div id="content-container" class="content-width">

            <!-- Page Intro -->
            <div id="intro" class="row">
                <div class="large-12 columns">
                    <h1>Welcome to <strong>Archtek.</strong> The modern template.</h1>
                    <div id="intro-line">
                        <hr class="stick" />
                        <hr />
                    </div>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.
                    </p>
                </div>
            </div>

            <!-- Features -->
            <div class="row">
                <div class="large-3 columns height-510 no-padding">
                    <img src="images/placeholders/255x510.gif" alt="" class="stretch-image" />
                </div>
                <div class="large-9 columns height-510 bottom-line">
                    <h2 class="has-line">We Develop Modern Living.</h2>
                    <h3 class="light larger">One-stop solution for your smart living in all aspects!</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Sed tortor arcu, egestas eu molestie in, lacinia luctus justo. Suspendisse semper.
                    </p>
                    <div class="row top-margin">
                        <div class="large-4 columns less-padding align-center">
                            <h4><i class="icon-bullseye"></i>Design.</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            </p>
                            <a href="#" class="flat button">Learn more</a>
                        </div>
                        <div class="large-4 columns less-padding align-center">
                            <h4><i class="icon-magic"></i>Develop.</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            </p>
                            <a href="#" class="flat button">Learn more</a>
                        </div>
                        <div class="large-4 columns less-padding align-center">
                            <h4><i class="icon-refresh"></i>Follow Up.</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            </p>
                            <a href="#" class="flat button">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Portfolio -->
            <div class="row top-margin">
                <div class="large-12 columns no-padding">

                    <div class="portfolio-wrapper">

                        <div class="portfolio-item fixed-box">
                            <h2 class="has-line">Our Recent Projects.</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in.
                            </p>
                            <a href="portfolio-list.php" class="flat button">View all projects</a>
                        </div>
    
                        <div class="kitchen mockup portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="#">Modern Kitchen Development</a></h3>
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
                                <h3><a href="#">Creamy Living Room</a></h3>
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
                                <h3><a href="#">New Sense Bathroom</a></h3>
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
                                <h3><a href="#">Open-Style &amp; Modern Living Room</a></h3>
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
                                <h3><a href="#">Comfortable Brown Sofa</a></h3>
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
                                <h3><a href="#">Clean Wooden Kitchen</a></h3>
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
                        
                    </div>
                        
                </div>
            </div>
            
            <div class="row top-margin">
                <div class="large-12 columns">
                    <h2 class="has-line">Why Archtek?</h2>
                    <p class="no-margin">
                        Suspendisse semper, justo eget hendrerit viverra, mauris ligula gravida lorem, vitae mollis nisi nisl sed velit. Phasellus tempus mi id mauris accumsan dapibus. Vestibulum luctus porta nisi, a blandit quam volutpat at.
                    </p>
                    <div class="section-container vertical-tabs" data-section="vertical-tabs">
                        <section>
                            <p class="title" data-section-title>
                                <a href="#">Phasellus</a>
                            </p>
                            <div class="content" data-section-content>
                                <h3>Praesent sollicitudin</h3>
                                
                                <div class="row">
                                    <div class="large-4 columns less-padding">
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                                        </p>
                                    </div>
                                    <div class="large-4 columns less-padding">
                                        <p>
                                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio
                                        </p>
                                    </div>
                                    <div class="large-4 columns less-padding">
                                        <img src="images/placeholders/255x255.gif" alt="" />
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <p class="title" data-section-title>
                                <a href="#">Vestibulum</a>
                            </p>
                            <div class="content" data-section-content>
                                <div class="row">
                                    <div class="large-9 columns less-padding">
                                        <div class="embed">
                                            <iframe src="http://player.vimeo.com/video/58150375?title=0&amp;byline=0&amp;portrait=0&amp;badge=0" width="1068" height="600" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                        </div>
                                    </div>
                                    <div class="large-3 columns less-padding">
                                        <h3>We Are Featured!</h3>
                                        <p>
                                            Praesent sollicitudin ligula a magna consectetur commodo. Integer id urna dui. Vestibulum ornare orci eget dolor laoreet placerat. Suspendisse eu enim dui, a varius tortor.
                                        </p>
                                        <a href="#">Read More <i class="icon-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section>
                            <p class="title" data-section-title>
                                <a href="#">Suspendisse</a>
                            </p>
                            <div class="content" data-section-content>
                                <h3>Our Office</h3>
                                <p>
                                    Praesent sollicitudin ligula a magna consectetur commodo. Integer id urna dui. Vestibulum ornare orci eget dolor laoreet placerat. Suspendisse eu enim dui, a varius tortor.
                                </p>
                                <div class="google-map" data-latlng="-24.447150, 133.75634" data-address="New York, US" data-display-type="ROADMAP" data-zoom-level="16" data-height="240"></div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="row no-bg">
                <div class="large-12 columns no-padding">
                    <img src="images/placeholders/1020x255.gif" alt="" />
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns bottom-line">
                    <div class="row">
                        <div class="large-5 columns less-padding">
                            <h3>From The Blog</h3>
                            <div class="blog-item-list-style-wrapper">
                                <div class="blog-item-list-style-thumbnail-wrapper">
                                    <a href="blog-single.php"><img src="images/placeholders/60x60.gif" alt="" /></a>
                                </div>
                                <div class="blog-item-list-style-title-wrapper">
                                    <h4 class="blog-item-list-style-title"><a href="blog-single.php">Sed ut perspicia unde omnis iste natus</a></h4>
                                    <span class="date">May 30, 2013</span>
                                </div>
                            </div>
                            <div class="blog-item-list-style-wrapper">
                                <div class="blog-item-list-style-thumbnail-wrapper">
                                    <a href="blog-single.php"><img src="images/placeholders/60x60.gif" alt="" /></a>
                                </div>
                                <div class="blog-item-list-style-title-wrapper">
                                    <h4 class="blog-item-list-style-title"><a href="blog-single.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                    <span class="date">May 15, 2013</span>
                                </div>
                            </div>
                            <div class="blog-item-list-style-wrapper">
                                <div class="blog-item-list-style-thumbnail-wrapper">
                                    <a href="blog-single.php"><img src="images/placeholders/60x60.gif" alt="" /></a>
                                </div>
                                <div class="blog-item-list-style-title-wrapper">
                                    <h4 class="blog-item-list-style-title"><a href="blog-single.php">Ut enim ad minim veniam consectetur adipisicing elit, sed do eiusmod</a></h4>
                                    <span class="date">May 9, 2013</span>
                                </div>
                            </div>
                        </div>
                        <div class="large-7 columns less-padding">
                            <h3>Testimonials</h3>
                            <div class="testimonial-wrapper style2">
                                <div class="testimonial-inner">
                                    <div class="testimonial-list">
                                        <div>
                                            <blockquote>
                                                <p>
                                                    Nunc feugiat mi a tellus at consequat. Proinquam. Etiam ultrices. Suspendisse in justo sit etiam magna luctus suscipit. At vero eos et accusamus et iusto odio dignissimos ducimus qui 
                                                </p>
                                                <cite> Richard Jones, Arch Era Magazine </cite>
                                            </blockquote>
                                        </div>
                                        <div>
                                            <blockquote>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit! Aliquam in ipsum sed mi vestibulum lacinia. Morbi sit amet placerat nibh. Pellentesque habitant morbi tristique senectus
                                                </p>
                                                <cite> Balmer Family, New York </cite>
                                            </blockquote>
                                        </div>
                                        <div>
                                            <blockquote>
                                                <p class="smaller">
                                                    Curabitur sodales ligula in libero. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor.
                                                </p>
                                                <cite> Steve Woodman, Agency </cite>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-bullets"></div>
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

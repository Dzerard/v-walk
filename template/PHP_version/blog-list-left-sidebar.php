<?php
$page = 'blog';
$title = 'Blog List (Left Sidebar) | Archtek.';
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
                            <a href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Page Intro -->
            <div id="intro" class="not-homepage row">
                <div class="large-9 large-centered columns">
                    <h1>Our <strong>News</strong> &amp; Updates</h1>
                </div>
            </div>

            <!-- Blog List -->
            <div class="grey-bg row">
                <div class="large-9 columns for-nested push-3">
                    <div class="blog-item row">
                        <div class="large-12 columns height-255">
                            <div class="blog-meta">
                                <span class="date">May 30, 2013</span>
                                <ul class="author-comments">
                                    <li>
                                        <i class="icon-user"></i><a href="#">Paul Chambers</a>
                                    </li>
                                    <li>
                                        <i class="icon-comments-alt"></i><a href="#">5 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <h2 class="blog-title"><a href="blog-single.php">Sed ut perspicia unde omnis iste natus labore et dolore mag</a></h2>
                            <p class="excerpt">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam consectetur adipisicing elit, sed do eiusmod...
                            </p>
                            <a class="readmore-link" href="blog-single.php">Read More</a>
                        </div>
                        <div class="large-12 columns no-padding">
                            <img src="images/placeholders/765x255.gif" alt="" />
                        </div>
                    </div>
                    <div class="blog-item row">
                        <div class="large-12 columns height-255">
                            <div class="blog-meta">
                                <span class="date">May 15, 2013</span>
                                <ul class="author-comments">
                                    <li>
                                        <i class="icon-user"></i><a href="#">Alice Palmer</a>
                                    </li>
                                    <li>
                                        <i class="icon-comments-alt"></i><a href="#">2 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <h2 class="blog-title"><a href="blog-single.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</a></h2>
                            <p class="excerpt">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                            </p>
                            <a class="readmore-link" href="blog-single.php">Read More</a>
                        </div>
                        <div class="large-12 columns no-padding">
                            <img src="images/placeholders/765x255.gif" alt="" />
                        </div>
                    </div>
                    <div class="blog-item row">
                        <div class="large-12 columns height-255">
                            <div class="blog-meta">
                                <span class="date">May 5, 2013</span>
                                <ul class="author-comments">
                                    <li>
                                        <i class="icon-user"></i><a href="#">Zedric Johnson</a>
                                    </li>
                                    <li>
                                        <i class="icon-comments-alt"></i><a href="#">0 Comment</a>
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <h2 class="blog-title"><a href="blog-single.php">Ut enim ad minim veniam consectetur adipisicing elit</a></h2>
                            <p class="excerpt">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam consectetur adipisicing elit, sed do eiusmod...
                            </p>
                            <a class="readmore-link" href="blog-single.php">Read More</a>
                        </div>
                        <div class="large-12 columns no-padding">
                            <img src="images/placeholders/765x255.gif" alt="" />
                        </div>
                    </div>

                    <div class="row">
                        <div id="blog-pagination" class="large-12 columns pagination-centered">
                            <ul class="pagination">
                                <li class="unavailable">
                                    <a href="javascript:;"><i class="icon-angle-left"></i></a>
                                </li>
                                <li class="current">
                                    <a href="javascript:;">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li class="unavailable">
                                    <a href="#">&hellip;</a>
                                </li>
                                <li>
                                    <a href="#">8</a>
                                </li>
                                <li>
                                    <a href="#">9</a>
                                </li>
                                <li class="arrow">
                                    <a href="#"><i class="icon-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div id="sidebar-wrapper" class="large-3 columns for-nested pull-9">
                    
                    <div class="widget-item row">
                        <div class="large-12 columns">
                            <div class="search-widget">
                                <h4>Search</h4>
                                <form method="get">
                                    <input type="text" placeholder="Type and hit enter ...">
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="widget-item row">
                        <div class="large-12 columns">
                            <div class="posts-widget">
                                <h4>Recent Posts</h4>
                                <ul>
                                    <li>
                                        <div class="post-thumbnail">
                                            <a href="blog-single.php"><img src="images/placeholders/40x40.gif" alt="" /></a>
                                        </div>
                                        <div class="post-title">
                                            <a href="blog-single.php">Sed ut perspicia unde omnis iste natus</a>
                                            <span class="date">May 30, 2013</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-thumbnail">
                                            <a href="blog-single.php"><img src="images/placeholders/40x40.gif" alt="" /></a>
                                        </div>
                                        <div class="post-title">
                                            <a href="blog-single.php">Lorem ipsum dolor ..</a>
                                            <span class="date">May 15, 2013</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-thumbnail">
                                            <a href="blog-single.php"><img src="images/placeholders/40x40.gif" alt="" /></a>
                                        </div>
                                        <div class="post-title">
                                            <a href="blog-single.php">Ut enim ad minim veniam consec ..</a>
                                            <span class="date">May 9, 2013</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="widget-item row">
                        <div class="large-12 columns">
                            <div class="category-widget">
                                <h4>Categories</h4>
                                <ul>
                                    <li>
                                        <a href="#">Announcements</a>
                                    </li>
                                    <li>
                                        <a href="#">General News</a>
                                    </li>
                                    <li>
                                        <a href="#">Promotions &amp; Offers</a>
                                    </li>
                                    <li>
                                        <a href="#">Customer Relationship</a>
                                    </li>
                                    <li>
                                        <a href="#">Upcoming Events</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="widget-item row">
                        <div class="large-12 columns">
                            <div class="flickr-widget">
                                <h4>Flickr Gallery</h4>
                                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?show_name=1&count=6&display=random&size=s&layout=x&source=user&user=52617155@N08"></script>
                            </div>
                        </div>
                    </div>
                    
                    <div class="widget-item row">
                        <div class="large-12 columns">
                            <div class="custom-text-widget">
                                <h4>Custom Text</h4>
                                <p>
                                    Ut enim ad minim veniam consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam consectetur adipisicing elit, sed do eiusmod
                                </p>
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

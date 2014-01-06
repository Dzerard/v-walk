<div id="header-container" class="content-width">
    <!-- Logo -->
    <div id="logo-wrapper">
        <div id="logo">
            <a href="index.php"><img src="images/logo.png" alt="Archtek" /></a>
            <p>
                We design and construct your satisfaction.
            </p>
        </div>
    </div>
    <!-- Menu -->
    <div id="menu-wrapper">
        <ul id="root-menu" class="sf-menu">
            <li>
                <a href="index.php" <?php if($page == 'home') { echo 'class="active"'; } ?>>Home</a>
                <ul>
                    <li>
                        <a href="index.php">Home Style 1</a>
                    </li>
                    <li>
                        <a href="index-2.php">Home Style 2</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="about-us.php" <?php if($page == 'about') { echo 'class="active"'; } ?>>About Us</a>
            </li>
            <li>
                <a href="portfolio-list.php" <?php if($page == 'portfolio') { echo 'class="active"'; } ?>>Portfolio</a>
                <ul>
                    <li>
                        <a href="portfolio-list.php">List Page</a>
                    </li>
                    <li>
                        <a href="portfolio-single.php">Single Page</a>
                        <ul>
                            <li>
                                <a href="portfolio-single.php">Image/Slideshow Format</a>
                            </li>
                            <li>
                                <a href="portfolio-single-video.php">Video Format</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="blog-list.php" <?php if($page == 'blog') { echo 'class="active"'; } ?>>Blog</a>
                <ul>
                    <li>
                        <a href="blog-list.php">List Page</a>
                    </li>
                    <li>
                        <a href="blog-list-left-sidebar.php">List Page (Left Sidebar)</a>
                    </li>
                    <li>
                        <a href="blog-single.php">Single Page</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" <?php if($page == 'others') { echo 'class="active"'; } ?>>Other Pages</a>
                <ul>
                    <li>
                        <a href="gallery-1.php">Gallery Style 1</a>
                    </li>
                    <li>
                        <a href="gallery-2.php">Gallery Style 2</a>
                    </li>
                    <li>
                        <a href="team.php">Our Team</a>
                    </li>
                    <li>
                        <a href="team-member-single.php">Team Member Profile</a>
                    </li>
                    <li>
                        <a href="faq.php">FAQ</a>
                    </li>
                    <li>
                        <a href="404.php">404 - Page Not Found</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" <?php if($page == 'elements') { echo 'class="active"'; } ?>>Elements</a>
                <ul class="flip">
                    <li>
                        <a href="elements-layouts.php">Layouts</a>
                    </li>
                    <li>
                        <a href="elements-buttons.php">Buttons</a>
                    </li>
                    <li>
                        <a href="elements-headings.php">Headings</a>
                    </li>
                    <li>
                        <a href="elements-icons.php">Icons</a>
                    </li>
                    <li>
                        <a href="elements-images-videos.php">Images and Videos</a>
                    </li>
                    <li>
                        <a href="elements-blockquotes.php">Blockquotes</a>
                    </li>
                    <li>
                        <a href="elements-tabs-message-boxes.php">Tabs and Message Boxes</a>
                    </li>
                    <li>
                        <a href="elements-accordion-toggles.php">Accordion and Toggles</a>
                    </li>
                    <li>
                        <a href="elements-google-maps.php">Google Maps</a>
                    </li>
                    <li>
                        <a href="elements-testimonial-slider.php">Testimonial Slider</a>
                    </li>
                    <li>
                        <a href="elements-dropcaps-highlights-dividers.php">Drop Caps, Highlights and Dividers</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="contact-us.php" <?php if($page == 'contact') { echo 'class="active"'; } ?>>Contact</a>
            </li>
        </ul>
        
        <nav id="mobile-menu" class="top-bar">
            <ul class="title-area">
                <!-- Do not remove this list item -->
                <li class="name"></li>
                
                <!-- Menu toggle button -->
                <li class="toggle-topbar menu-icon">
                    <a href="#"><span>Menu</span></a>
                </li>
            </ul>
            
            <!-- Mobile menu's container -->
            <section class="top-bar-section"></section>
        </nav>
    
    </div>
    
    
    <!-- Search -->
    <div id="header-search">
        <a id="header-search-button" href="javascript:;"><i class="icon-search"></i></a>
    </div>
    <div id="header-search-input-wrapper">
        <form method="get">
            <input id="header-search-input" type="text" placeholder="Type and hit enter to search ..." />
        </form>
    </div>
    
</div> <!-- End id="header-container" -->
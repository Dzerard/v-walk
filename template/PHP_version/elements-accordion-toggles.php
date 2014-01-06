<?php
$page = 'elements';
$title = 'Accordion and Toggles | Archtek.';
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
                    <h1><strong>Accordion</strong> and <strong>Toggles</strong></h1>
                </div>
            </div>

            <div class="row">
                <div class="large-12 columns">

                    <div class="row">
                        <div class="large-6 columns less-padding">
                            
                            <h2>Accordion</h2>
                            
                            <!-- Accordion -->
                            <div class="accordion" data-active-index="0">
                                
                                <!-- Accordion Item 1 -->
                                <h4><a href="#">Normal Text</a></h4>
                                <div>
                                    <p>
                                        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                    </p>
                                </div>
                                
                                <!-- Accordion Item 2 -->
                                <h4><a href="#">Text with List Item</a></h4>
                                <div>
                                    <p>
                                        Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                    </p>
                                    <ul>
                                        <li>
                                            List item one
                                        </li>
                                        <li>
                                            List item two
                                        </li>
                                        <li>
                                            List item three
                                        </li>
                                    </ul>
                                </div>
                                
                                <!-- Accordion Item 3 -->
                                <h4><a href="#">Image with Text</a></h4>
                                <div>
                                    <img src="images/placeholders/510x255.gif" alt="" />
                                    <p>
                                        Sed lacinia lorem facilisis augue dictum semper vestibulum nulla accumsan. Sed sit amet dolor sem. Nam adipiscing dolor vel arcu vehicula et aliquam mi rhoncus. Duis volutpat ornare tellus quis venenatis.
                                    </p>
                                </div>
                                
                                <!-- Accordion Item 4 -->
                                <h4><a href="#">Video</a></h4>
                                <div>
                                    <div class="embed">
                                        <iframe src="http://player.vimeo.com/video/24535181?api=1&title=0&byline=0&portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="large-6 columns less-padding">
                            
                            <h2>Toggles</h2>
                            
                            <!-- Toggle 1 -->
                            <div class="toggle active">
                                <h4><a href="#">Text (Opened by Default)</a></h4>
                                <div>
                                    <p>
                                        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Toggle 2 -->
                            <div class="toggle">
                                <h4><a href="#">Image</a></h4>
                                <div>
                                    <img src="images/placeholders/510x255.gif" alt="" />
                                    <p>
                                        Sed lacinia lorem facilisis augue dictum semper vestibulum nulla accumsan. Sed sit amet dolor sem. Nam adipiscing dolor vel arcu vehicula et aliquam mi rhoncus. Duis volutpat ornare tellus quis venenatis.
                                    </p>
                                    <p></p>
                                </div>
                            </div>
                            
                            <!-- Toggle 3 -->
                            <div class="toggle">
                                <h4><a href="#">Video</a></h4>
                                <div>
                                    <div class="embed">
                                        <iframe src="http://www.youtube.com/embed/G_G8SdXktHg?wmode=opaque" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <p>
                                        Sed lacinia lorem facilisis augue dictum semper vestibulum nulla accumsan. Sed sit amet dolor sem. Nam adipiscing dolor vel arcu vehicula et aliquam mi rhoncus. Duis volutpat ornare tellus quis venenatis.
                                    </p>
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

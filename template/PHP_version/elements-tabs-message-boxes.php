<?php
$page = 'elements';
$title = 'Tabs and Message Boxes | Archtek.';
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
                    <h1><strong>Tabs</strong> and <strong>Message Boxes</strong></h1>
                </div>
            </div>

            <div class="row">
                <div class="large-12 columns">

                    <div class="row">
                        <div class="large-6 columns less-padding">
                            
                            <h2>Default Tabs</h2>
                            
                            <div class="section-container auto" data-section>
                                <section>
                                    <p class="title" data-section-title>
                                        <a href="#panel1">Praesent sollicitudin</a>
                                    </p>
                                    <div class="content" data-section-content>
                                        <p>
                                            Praesent sollicitudin ligula a magna consectetur commodo. Integer id urna dui. Vestibulum ornare orci eget dolor laoreet placerat. Suspendisse eu enim dui, a varius tortor. Aliquam in ipsum sed mi vestibulum lacinia. Morbi sit amet placerat nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam hendrerit sapien vel lorem varius pellentesque. Donec rutrum lorem ut diam volutpat at consectetur erat sodales.
                                        </p>
                                        <p>
                                            Sed tortor arcu, egestas eu molestie in, lacinia luctus justo. Suspendisse semper, justo eget hendrerit viverra, mauris ligula gravida lorem, vitae mollis nisi nisl sed velit. Phasellus tempus mi id mauris accumsan dapibus. Vestibulum luctus porta nisi, a blandit quam volutpat at.
                                        </p>
                                    </div>
                                </section>
                                <section>
                                    <p class="title" data-section-title>
                                        <a href="#panel2">Image + Text</a>
                                    </p>
                                    <div class="content" data-section-content>
                                        <img src="images/placeholders/510x255.gif" alt="" />
                                        <p>
                                            Sed tortor arcu, egestas eu molestie in, lacinia luctus justo. Suspendisse semper, justo eget hendrerit viverra, mauris ligula gravida lorem, vitae mollis nisi nisl sed velit. Phasellus tempus mi id mauris accumsan dapibus. Vestibulum luctus porta nisi, a blandit quam volutpat at.
                                        </p>
                                    </div>
                                </section>
                                <section>
                                    <p class="title" data-section-title>
                                        <a href="#panel3">Praesent sollicitudin</a>
                                    </p>
                                    <div class="content" data-section-content>
                                        <div class="embed">
                                            <iframe src="http://player.vimeo.com/video/58150375?title=0&amp;byline=0&amp;portrait=0&amp;badge=0" width="1068" height="600" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            
                        </div>
                        <div class="large-6 columns less-padding">
                            
                            <h2>Message Boxes</h2>
                            
                            <div data-alert class="success box">
                                <strong class="title">Successful Box.</strong>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec massa est, scelerisque eu dictum at, vehicula commodo odio.
                                </p>
                                <a href="#" class="close">&times;</a>
                            </div>
                            <div data-alert class="error box">
                                <strong class="title">Alert Box!</strong>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec massa est, scelerisque eu dictum at, vehicula commodo odio.
                                </p>
                                <a href="#" class="close">&times;</a>
                            </div>
                            <div data-alert class="info box">
                                <strong class="title">Information Box.</strong>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec massa est, scelerisque eu dictum at, vehicula commodo odio.
                                </p>
                                <a href="#" class="close">&times;</a>
                            </div>
                            <div data-alert class="warning box">
                                <strong class="title">Warning Box!</strong>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec massa est, scelerisque eu dictum at, vehicula commodo odio.
                                </p>
                                <a href="#" class="close">&times;</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="large-12 columns less-padding">
                            
                            <h2>Vertical Tabs</h2>
                            
                            <div class="section-container vertical-tabs" data-section="vertical-tabs">
                                <section>
                                    <p class="title" data-section-title>
                                        <a href="#">Text</a>
                                    </p>
                                    <div class="content" data-section-content>
                                        <p>
                                            Praesent sollicitudin ligula a magna consectetur commodo. Integer id urna dui. Vestibulum ornare orci eget dolor laoreet placerat. Suspendisse eu enim dui, a varius tortor. Aliquam in ipsum sed mi vestibulum lacinia. Morbi sit amet placerat nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam hendrerit sapien vel lorem varius pellentesque. Donec rutrum lorem ut diam volutpat at consectetur erat sodales.
                                        </p>
                                        <p>
                                            Sed tortor arcu, egestas eu molestie in, lacinia luctus justo. Suspendisse semper, justo eget hendrerit viverra, mauris ligula gravida lorem, vitae mollis nisi nisl sed velit. Phasellus tempus mi id mauris accumsan dapibus. Vestibulum luctus porta nisi, a blandit quam volutpat at.
                                        </p>
                                    </div>
                                </section>
                                <section>
                                    <p class="title" data-section-title>
                                        <a href="#">Image + Text</a>
                                    </p>
                                    <div class="content" data-section-content>
                                        <img src="images/placeholders/510x255.gif" alt="" />
                                        <p>
                                            Sed tortor arcu, egestas eu molestie in, lacinia luctus justo. Suspendisse semper, justo eget hendrerit viverra, mauris ligula gravida lorem, vitae mollis nisi nisl sed velit. Phasellus tempus mi id mauris accumsan dapibus. Vestibulum luctus porta nisi, a blandit quam volutpat at.
                                        </p>
                                    </div>
                                </section>
                                <section>
                                    <p class="title" data-section-title>
                                        <a href="#">Video</a>
                                    </p>
                                    <div class="content" data-section-content>
                                        <div class="embed">
                                            <iframe src="http://player.vimeo.com/video/58150375?title=0&amp;byline=0&amp;portrait=0&amp;badge=0" width="1068" height="600" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                        </div>
                                    </div>
                                </section>
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

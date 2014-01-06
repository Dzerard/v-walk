<?php
$page = 'elements';
$title = 'Layouts | Archtek.';
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
                    <h1><strong>Layouts</strong></h1>
                    <p>
                        The layout consists of row and column. Total columns in a row are 12 columns. You can easily use that to create the flexible layouts as many as you want. Below are some examples.
                    </p>
                </div>
            </div>

            <!-- Wrap the actual content with "full 12 columns" first -->
            <div class="row">
                <div class="large-12 columns">
                    
                    <!-- Here are the actual row and column(s) of content -->
                    <div class="row">
                        <div class="large-12 columns less-padding">
                            <h3>Full-Width (12 Columns)</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="large-6 columns less-padding">
                            <h3>One-Half (6 Columns)</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <div class="large-6 columns less-padding">
                            <h3>One-Half (6 Columns)</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="large-4 columns less-padding">
                            <h3>One-Third (4 Columns)</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                        <div class="large-4 columns less-padding">
                            <h3>One-Third (4 Columns)</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                        <div class="large-4 columns less-padding">
                            <h3>One-Third (4 Columns)</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="large-4 columns less-padding">
                            <h3>One-Third (4 Columns)</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                        <div class="large-8 columns less-padding">
                            <h3>Two-Third (8 Columns)</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="large-3 columns less-padding">
                            <h3>One-Fourth (3 Columns)</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </p>
                        </div>
                        <div class="large-3 columns less-padding">
                            <h3>One-Fourth (3 Columns)</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </p>
                        </div>
                        <div class="large-3 columns less-padding">
                            <h3>One-Fourth (3 Columns)</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </p>
                        </div>
                        <div class="large-3 columns less-padding">
                            <h3>One-Fourth (3 Columns)</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="large-9 columns less-padding">
                            <h3>Three-Fourth (9 Columns)</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                        </div>
                        <div class="large-3 columns less-padding">
                            <h3>One-Fourth (3 Columns)</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
            <div class="row top-margin">
                <div class="large-3 columns height-510 no-padding">
                    <img src="images/placeholders/255x510.gif" alt="" class="stretch-image" />
                </div>
                <div class="large-9 columns height-510 bottom-line">
                    <h2 class="smaller">More Complicated Layout</h2>
                    <h3 class="light uppercase larger">Nested 3-Columns Row With Left-Side Thumbnail</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <div class="row">
                        <div class="large-4 columns less-padding">
                            <h4>Column 1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="large-4 columns less-padding">
                            <h4>Column 2</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="large-4 columns less-padding">
                            <h4>Column 3</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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

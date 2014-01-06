<?php
$page = 'elements';
$title = 'Buttons | Archtek.';
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
                    <h1><strong>Buttons</strong></h1>
                </div>
            </div>

            <div class="row">
                <div class="large-12 columns no-padding-bottom">
                    <h2 class="has-line">Primary Color</h2>
                    <p>
                        By default, any buttons use the same color as the color scheme of the template as followings. 
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="large-4 columns">
                    <h3>Standard Set</h3>
                    <a href="#" class="tiny flat button">Button</a>
                    <br/><br/>
                    <a href="#" class="small flat button">Button</a>
                    <br/><br/>
                    <a href="#" class="flat button">Button</a>
                    <br/><br/>
                    <a href="#" class="large flat button">Button</a>
                    <br/><br/>
                    <a href="#" class="large expand flat button">Button</a>
                </div>
                <div class="large-4 columns">
                    <h3>Radius Set</h3>
                    <a href="#" class="tiny flat radius button">Button</a>
                    <br/><br/>
                    <a href="#" class="small flat radius button">Button</a>
                    <br/><br/>
                    <a href="#" class="flat radius button">Button</a>
                    <br/><br/>
                    <a href="#" class="large flat radius button">Button</a>
                    <br/><br/>
                    <a href="#" class="large expand flat radius button">Button</a>
                </div>
                <div class="large-4 columns">
                    <h3>Round Set</h3>
                    <a href="#" class="tiny flat round button">Button</a>
                    <br/><br/>
                    <a href="#" class="small flat round button">Button</a>
                    <br/><br/>
                    <a href="#" class="flat round button">Button</a>
                    <br/><br/>
                    <a href="#" class="large flat round button">Button</a>
                    <br/><br/>
                    <a href="#" class="large expand flat round button">Button</a>
                </div>
            </div>
            
            <div class="row top-margin">
                <div class="large-12 columns no-padding-bottom">
                    <h2 class="has-line">Other Colors</h2>
                    <p>
                        There are 3 more colors to be used as followings.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="large-4 columns">
                    <h3>Grey</h3>
                    <a href="#" class="tiny flat secondary button">Button</a>
                    <br/><br/>
                    <a href="#" class="small flat secondary button">Button</a>
                    <br/><br/>
                    <a href="#" class="flat secondary button">Button</a>
                    <br/><br/>
                    <a href="#" class="large flat secondary button">Button</a>
                    <br/><br/>
                    <a href="#" class="large expand flat secondary button">Button</a>
                </div>
                <div class="large-4 columns">
                    <h3>Red</h3>
                    <a href="#" class="tiny flat alert button">Button</a>
                    <br/><br/>
                    <a href="#" class="small flat alert button">Button</a>
                    <br/><br/>
                    <a href="#" class="flat alert button">Button</a>
                    <br/><br/>
                    <a href="#" class="large flat alert button">Button</a>
                    <br/><br/>
                    <a href="#" class="large expand flat alert button">Button</a>
                </div>
                <div class="large-4 columns">
                    <h3>Green</h3>
                    <a href="#" class="tiny flat success button">Button</a>
                    <br/><br/>
                    <a href="#" class="small flat success button">Button</a>
                    <br/><br/>
                    <a href="#" class="flat success button">Button</a>
                    <br/><br/>
                    <a href="#" class="large flat success button">Button</a>
                    <br/><br/>
                    <a href="#" class="large expand flat success button">Button</a>
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

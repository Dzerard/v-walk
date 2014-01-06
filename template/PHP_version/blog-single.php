<?php
$page = 'blog';
$title = 'Blog Single Page | Archtek.';
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
                            <a href="#">Announcements</a>
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
                    <h2>Our <strong>News</strong> &amp; Updates</h2>
                </div>
            </div>

            <!-- Blog Info -->
            <div class="grey-bg row">
                <div class="large-9 columns for-nested">
                    <div class="blog-item single row">

                        <div class="large-12 columns no-padding">
                            <img src="images/placeholders/765x255.gif" alt="" />
                        </div>
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
                            <h1 class="blog-title">Sed ut perspicia unde omnis iste natus labore et dolore mag</h1>
                            <p>
                                Praesent sollicitudin ligula a magna consectetur commodo. Integer id urna dui. Vestibulum ornare orci eget dolor laoreet placerat. Suspendisse eu enim dui, a varius tortor. Aliquam in ipsum sed mi vestibulum lacinia. Morbi sit amet placerat nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam hendrerit sapien vel lorem varius pellentesque. Donec rutrum lorem ut diam volutpat at consectetur erat sodales.
                            </p>
                            <blockquote class="left">
                                <p>
                                    Integer eget eros ligula. Curabitur a leo tellus
                                </p>
                            </blockquote>
                            <p>
                                Sed tortor arcu, egestas eu molestie in, lacinia luctus justo. Suspendisse semper, justo eget hendrerit viverra, mauris ligula gravida lorem, vitae mollis nisi nisl sed velit. Phasellus tempus mi id mauris accumsan dapibus. Vestibulum luctus porta nisi, a blandit quam volutpat at. Praesent in sapien arcu, ut malesuada dui. Morbi sed felis eget lectus semper tincidunt eget at nisl. Donec augue turpis, tempor id pulvinar eget, cursus eget ante. Proin sit amet nibh sem. Nulla porta sapien id diam euismod ultricies. Vestibulum elementum, lectus at gravida facilisis, sem ante bibendum justo, sit amet semper lacus nulla at est. Curabitur id augue libero. Quisque bibendum mattis luctus. Integer molestie molestie dapibus. Sed imperdiet, diam eu feugiat tristique, felis odio condimentum tellus, ut fermentum tortor urna sit amet arcu. In hac habitasse platea dictumst. Pellentesque purus augue, hendrerit at fermentum at, euismod a velit.
                            </p>
                            <blockquote class="right">
                                <p>
                                    Etiam pellentesque mollis ultrices. Nam dictum auctor nunc
                                </p>
                            </blockquote>
                            <p>
                                Integer eget eros ligula. Curabitur a leo tellus, quis elementum turpis. Curabitur est nibh, ullamcorper eu viverra ultricies, aliquet nec lectus. Vestibulum elementum, purus a tempus fringilla, tortor est ultricies nibh, id feugiat nunc lectus in massa. Vivamus iaculis purus at tortor lacinia pharetra. Curabitur orci neque, tincidunt at pharetra in, accumsan elementum orci. Maecenas id nibh quis arcu ultricies dignissim in sit amet justo. Fusce mattis arcu sed nulla volutpat porta.
                            </p>
                            <p>
                                Etiam pellentesque mollis ultrices. Nam dictum auctor nunc, at ultricies lorem tempor id. Nulla tellus dolor, aliquam ac consectetur at, euismod sed sapien. Fusce placerat, metus in placerat luctus, nisi ligula varius nisl, a venenatis turpis purus sit amet quam. Nunc quis eros quam, sit amet malesuada tortor. Praesent viverra adipiscing quam, sit amet aliquet velit aliquam vel. Vivamus quis enim interdum lacus mattis feugiat.
                            </p>
                            <blockquote>
                                <p>
                                    Suspendisse eu enim dui, a varius tortor. Aliquam in ipsum sed mi vestibulum lacinia. Donec augue turpis, tempor id pulvinar eget, cursus eget ante. Proin sit amet nibh sem. Nulla porta sapien id diam euismod ultricies.
                                </p>
                                <cite>Robert Bosni</cite>
                            </blockquote>
                            <p>
                                Fusce ac vestibulum quam. Etiam accumsan ligula ut justo gravida eget accumsan arcu rhoncus. Etiam urna justo, viverra non laoreet gravida, rhoncus in arcu. Proin eget enim quam. Donec tempor urna id purus dignissim et euismod mi mattis. Praesent tincidunt ornare urna at euismod. Nulla lobortis, purus eget hendrerit tincidunt, quam sapien eleifend ante, eu cursus leo leo a orci. Praesent nisl ipsum, sodales vitae eleifend vitae, facilisis quis nisl. Nulla eu leo sed nisl posuere sollicitudin vel ac dolor. Integer lobortis nibh eu nibh tempor a sollicitudin massa vulputate. Curabitur quam mauris, sollicitudin ac dapibus a, sagittis sit amet ante. Proin mattis pharetra faucibus. Quisque aliquet mattis placerat. Proin et ipsum nunc. Phasellus dictum pharetra semper. Nam auctor rutrum ornare.
                            </p>

                            <div id="author-box">
                                <img id="author-photo" src="images/placeholders/90x90.gif" alt="" />
                                <div id="author-info">
                                    <h3>About Paul Chambers</h3>
                                    <p>
                                        eu leo sed nisl posuere sollicitudin vel ac dolor. Integer lobortis nibh eu nibh tempor a sollicitudin massa vulputate. Fusce ac vestibulum quam. Etiam accumsan ligula ut justo gravida eget accumsan arcu rhoncus
                                    </p>
                                    <ul id="author-social">
                                        <li>
                                            <a href="#"><img src="images/social/team/Twitter.png" alt="Twitter" title="Twitter" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/social/team/Facebook.png" alt="Facebook" title="Facebook" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/social/team/Google.png" alt="Google+" title="Google+" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/social/team/Dribbble.png" alt="Dribbble" title="Dribbble" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/social/team/Forrst.png" alt="Forrst" title="Forrst" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="images/social/team/Flickr.png" alt="Flickr" title="Flickr" /></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div id="tags-wrapper" class="blog-section">
                                <h4 class="blog-section-title">Tags</h4>
                                <ul class="tags">
                                    <li>
                                        <a href="#">Promotion</a>
                                    </li>
                                    <li>
                                        <a href="#">Decoration</a>
                                    </li>
                                    <li>
                                        <a href="#">Home Design</a>
                                    </li>
                                    <li>
                                        <a href="#">Happy</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Comment Section -->
                            <div id="comment-content" class="blog-section">
                                <h4 class="blog-section-title">6 Comments</h4>
                                <ul class="commentlist">
                                    <li class="comment parent comment-item">
                                        <div class="comment-body">
                                            <div class="commenter-photo">
                                                <img alt='' src='images/anonymous.jpg' />
                                            </div>
                                            <div class="comment-post-wrapper">
                                                <div class="reply">
                                                    <a class="comment-edit-link" href="#" title="Edit comment">Edit</a> | <a class='comment-reply-link' href='#'>Reply</a>
                                                </div>
                                                <div class="comment-item-meta">
                                                    <span class="commenter-name"><cite><a href='http://themeforest.net/user/UXbarn?ref=UXbarn' rel='external nofollow'>Paul C.</a></cite></span>
                                                    <span class="comment-date"><a href="#"> April 30, 2013 at 2:04 pm</a> </span>
                                                </div>
                                                <div class="comment-post">
                                                    <p>
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class='children'>
                                            <li class="comment depth-2 parent comment-item">

                                                <div class="comment-body">
                                                    <div class="commenter-photo">
                                                        <img alt='' src='images/anonymous.jpg' />
                                                    </div>
                                                    <div class="comment-post-wrapper">
                                                        <div class="reply">
                                                            <a class="comment-edit-link" href="#" title="Edit comment">Edit</a> | <a class='comment-reply-link' href='#'>Reply</a>
                                                        </div>
                                                        <div class="comment-item-meta">
                                                            <span class="commenter-name"><cite><a href='http://themeforest.net/user/UXbarn?ref=UXbarn' rel='external nofollow'>Paul C.</a></cite></span>
                                                            <span class="comment-date"><a href="#"> April 30, 2013 at 2:04 pm</a> </span>
                                                        </div>
                                                        <div class="comment-post">
                                                            <p>
                                                                Doloremque laudantium, totam
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <ul class='children'>
                                                    <li class="comment depth-3 parent comment-item">

                                                        <div class="comment-body">
                                                            <div class="commenter-photo">
                                                                <img alt='' src='images/anonymous.jpg' />
                                                            </div>
                                                            <div class="comment-post-wrapper">
                                                                <div class="reply">
                                                                    <a class="comment-edit-link" href="#" title="Edit comment">Edit</a> | <a class='comment-reply-link' href='#'>Reply</a>
                                                                </div>
                                                                <div class="comment-item-meta">
                                                                    <span class="commenter-name"><cite><a href='http://themeforest.net/user/UXbarn?ref=UXbarn' rel='external nofollow'>Paul C.</a></cite></span>
                                                                    <span class="comment-date"><a href="#"> April 30, 2013 at 2:04 pm</a> </span>
                                                                </div>
                                                                <div class="comment-post">
                                                                    <p>
                                                                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <ul class='children'>
                                                            <li class="comment depth-4 comment-item">

                                                                <div class="comment-body">
                                                                    <div class="commenter-photo">
                                                                        <img alt='' src='images/anonymous.jpg' />
                                                                    </div>
                                                                    <div class="comment-post-wrapper">
                                                                        <div class="reply">
                                                                            <a class="comment-edit-link" href="#" title="Edit comment">Edit</a> | <a class='comment-reply-link' href='#'>Reply</a>
                                                                        </div>
                                                                        <div class="comment-item-meta">
                                                                            <span class="commenter-name"><cite><a href='http://themeforest.net/user/UXbarn?ref=UXbarn' rel='external nofollow'>Paul C.</a></cite></span>
                                                                            <span class="comment-date"><a href="#"> April 30, 2013 at 2:04 pm</a> </span>
                                                                        </div>
                                                                        <div class="comment-post">
                                                                            <p>
                                                                                Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="comment depth-1 comment-item">

                                        <div class="comment-body">
                                            <div class="commenter-photo">
                                                <img alt='' src='images/anonymous.jpg' />
                                            </div>
                                            <div class="comment-post-wrapper">
                                                <div class="reply">
                                                    <a class="comment-edit-link" href="#" title="Edit comment">Edit</a> | <a class='comment-reply-link' href='#'>Reply</a>
                                                </div>
                                                <div class="comment-item-meta">
                                                    <span class="commenter-name"><cite><a href='http://themeforest.net/user/UXbarn?ref=UXbarn' rel='external nofollow'>Paul C.</a></cite></span>
                                                    <span class="comment-date"><a href="#"> April 30, 2013 at 2:04 pm</a> </span>
                                                </div>
                                                <div class="comment-post">
                                                    <p>
                                                        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="comment depth-1 comment-item">

                                        <div class="comment-body">
                                            <div class="commenter-photo">
                                                <img alt='' src='images/anonymous.jpg' />
                                            </div>
                                            <div class="comment-post-wrapper">
                                                <div class="reply">
                                                    <a class="comment-edit-link" href="#" title="Edit comment">Edit</a> | <a class='comment-reply-link' href='#'>Reply</a>
                                                </div>
                                                <div class="comment-item-meta">
                                                    <span class="commenter-name"><cite><a href='http://themeforest.net/user/UXbarn?ref=UXbarn' rel='external nofollow'>Paul C.</a></cite></span>
                                                    <span class="comment-date"><a href="#"> April 30, 2013 at 2:04 pm</a> </span>
                                                </div>
                                                <div class="comment-post">
                                                    <p>
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                </ul>

                                <div id="respond">
                                    <h4 class="blog-section-title">Leave a Comment</h4>
                                    <form method="post">
                                        <div class="row">
                                            <div class="large-5 columns less-padding">
                                                <label>Name</label>
                                                <input type="text" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="large-5 columns less-padding">
                                                <label>Email</label>
                                                <input type="text" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="large-5 columns less-padding">
                                                <label>Website</label>
                                                <input type="text" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="large-12 columns less-padding">
                                                <label>Comment</label>
                                                <textarea style="height: 120px;"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="large-5 columns less-padding">
                                                <input type="submit" class="flat button" value="Submit" />
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <!-- end id="comment-content" -->

                        </div>
                    </div>

                </div>
                <div id="sidebar-wrapper" class="large-3 columns for-nested">

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

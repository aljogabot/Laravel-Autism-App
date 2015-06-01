<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="author" content="Aljo Victor Gabot" />
    <meta name="description" content="Autism Social">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <title>Autism Social</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ elixir( 'css/app-all.css' ) }}"/>

</head>
<body class="scrollreveal">

<!-- Begin Boxed or Fullwidth Layout -->
<div id="bg-boxed">
<div class="boxed">

<!-- Begin Header -->
<header>

<!-- Begin Top Bar -->
<div class="top-bar">
    <div class="container container-header">
        <div class="row top-bar-row">
            <!-- Address and Phone -->
            <div class="col-sm-7 hidden-xs contact-info">
                <span class="ion-android-system-home home-icon"></span>Bright Passage, Fond du Lac, 63138 USA<span class="ion-ios7-telephone phone-icon"></span>1702983921
            </div>
            <!-- Social Buttons -->
            <div class="col-sm-5 text-right topmenu-holder">
                <ul class="topbar-list list-inline">
                    <li><a data-toggle="modal" data-target="#login">Login</a></li>
                    <li><a href="pages-forms-register-login.html">Register</a></li>
                    <li>
                        <a class="btn btn-social-icon btn-rw btn-primary btn-xs">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-rw btn-primary btn-xs">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-rw btn-primary btn-xs">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div><!--/row -->
    </div><!--/container header -->
</div><!--/top bar -->
<!-- End Top Bar -->

<!-- Login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="loginLabel">Login</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Do you flex?
                        </label>
                    </div>
                </form><!-- /form -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-rw btn-primary">Login</button>
            </div>
        </div><!-- /modal content -->
    </div><!-- /modal dialog -->
</div><!-- /modal holder -->
<!-- End Login -->

<!-- Begin Navigation -->
<div class="navbar">
<div class="container container-header">
<div class="navbar-header">
    <!-- Brand -->
    <a href="index.html" class="navbar-brand" style="width: 400px;">
        <div class="css-logo" style="margin-top: 9px; margin-right: 12px"></div>
        <!--<img src="images/logo2.png" class="raleway-logo" alt="Autism Speaks">-->
        <h1>Autism Social</h1>
    </a>
    <!-- Mobile Navigation -->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div><!-- /navbar header -->

<!-- Main Navigation -->
<nav class="navbar-collapse collapse navHeaderCollapse" role="navigation">
<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
    <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true">Home<span class="fa fa-angle-down dropdown-arrow"></span></a>
    <ul class="dropdown-menu">
        <li><a href="index.html">Option 1: Home</a></li>
        <li><a href="index-home.html">Option 2: aHome</a></li>
        <li><a href="index-home-b.html">Option 3: bHome</a></li>
        <li><a href="index-carousel-subnav.html">Option 4: Carousel Subnav</a></li>
        <li><a href="dark-navigation-example.html">Dark Navigation</a></li>
        <li class="dropdown-submenu">
            <a class="trigger">Footer Options</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="features-footer-options.html">Dark</a></li>
                <li><a tabindex="-1" href="features-footer-options-2.html">Light</a></li>
            </ul>
        </li>
    </ul>
</li>
<li class="dropdown active">
    <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-delay="300" data-close-others="true">Pages<span class="fa fa-angle-down dropdown-arrow"></span></a>
    <ul class="dropdown-menu">
        <li class="dropdown-submenu">
            <a class="trigger">About us &amp; Team</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="pages-about-us-1.html">About us 1</a></li>
                <li><a tabindex="-1" href="pages-about-us-2.html">About us 2</a></li>
                <li><a tabindex="-1" href="pages-about-us-team.html">About us &amp; Team</a></li>
                <li><a tabindex="-1" href="pages-team-1.html">The Team 1</a></li>
                <li><a tabindex="-1" href="pages-team-2.html">The Team 2</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a class="trigger">Services</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="pages-services-1.html">Option 1</a></li>
                <li><a tabindex="-1" href="pages-services-2.html">Option 2</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a class="trigger">About Me</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="pages-user-profile-1.html">User Profile 1</a></li>
                <li><a tabindex="-1" href="pages-user-profile-2.html">User Profile 2</a></li>
            </ul>
        </li>
        <li><a href="pages-pricing.html">Pricing</a></li>
        <li><a href="pages-timeline.html">Timeline</a></li>
        <li><a href="pages-freebies.html">Freebies</a></li>
        <li class="dropdown-submenu">
            <a class="trigger">Forms</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="pages-forms-register-login.html">Register &amp; Login</a></li>
                <li><a tabindex="-1" href="pages-contact-1.html">Contact 1</a></li>
                <li><a tabindex="-1" href="pages-contact-2.html">Contact 2</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a class="trigger">404</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="pages-404-default.html">Default</a></li>
                <li><a tabindex="-1" href="pages-404-default-image.html">Image</a></li>
                <li><a tabindex="-1" href="pages-404-fullscreen.html">Fullscreen</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a class="trigger">Basic Pages</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="pages-sidebar-right.html">Sidebar Right</a></li>
                <li><a tabindex="-1" href="pages-sidebar-left.html">Sidebar Left</a></li>
                <li><a tabindex="-1" href="pages-menu-right.html">Menu Right</a></li>
                <li><a tabindex="-1" href="pages-menu-left.html">Menu Left</a></li>
            </ul>
        </li>
        <li><a href="pages-faq.html">FAQ</a></li>
    </ul>
</li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-delay="300" data-close-others="true">Features<span class="fa fa-angle-down dropdown-arrow"></span></a>
    <ul class="dropdown-menu">
        <li><a href="features-parallax.html">Parallax</a></li>
        <li><a href="features-animations.html">Animations</a></li>
        <li class="dropdown-submenu">
            <a class="trigger">Icons</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="features-icons-fontawesome.html">FontAwesome</a></li>
                <li><a tabindex="-1" href="features-icons-ionicons.html">Ionicons</a></li>
                <li><a tabindex="-1" href="features-icons-glyphicons.html">Glyphicons</a></li>
                <li><a tabindex="-1" href="features-icons-raleway.html">Raleway</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a class="trigger">Buttons</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="features-buttons-basic.html">Basic</a></li>
                <li><a tabindex="-1" href="features-buttons-social.html">Social</a></li>
                <li><a tabindex="-1" href="features-buttons-library.html">Library</a></li>
            </ul>
        </li>
        <li><a href="features-columns.html">Columns</a></li>
        <li><a href="features-typography.html">Typography</a></li>
        <li class="dropdown-submenu">
            <a class="trigger">Components</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="features-alerts.html">Alerts</a></li>
                <li><a tabindex="-1" href="features-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                <li><a tabindex="-1" href="features-lists.html">Lists</a></li>
                <li><a tabindex="-1" href="features-thumbnails.html">Thumbnails</a></li>
                <li><a tabindex="-1" href="features-tables.html">Tables</a></li>
                <li><a tabindex="-1" href="features-dividers.html">Dividers</a></li>
                <li><a tabindex="-1" href="features-headings.html">Headings</a></li>
                <li><a tabindex="-1" href="features-progress-bars.html">Progress Bars</a></li>
                <li><a tabindex="-1" href="features-modals.html">Modals</a></li>
                <li><a tabindex="-1" href="features-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                <li><a tabindex="-1" href="features-labels-badges.html">Labels &amp; Badges</a></li>
                <li><a tabindex="-1" href="features-forms.html">Forms</a></li>
                <li><a tabindex="-1" href="features-panels.html">Panels</a></li>
            </ul>
        </li>
        <li><a href="features-sliders.html">Sliders</a></li>
        <li><a href="features-pricing-tables.html">Pricing Tables</a></li>
        <li><a href="features-calltoactions.html">Call to Action</a></li>
        <li class="dropdown-submenu">
            <a class="trigger">Content Boxes</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="features-content-boxes-icon-big.html">Icon Big</a></li>
                <li><a tabindex="-1" href="features-content-boxes-icon-small.html">Icon Small</a></li>
                <li><a tabindex="-1" href="features-content-boxes-icon-left.html">Icon Left Aligned</a></li>
                <li><a tabindex="-1" href="features-content-boxes.html">Boxes</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a class="trigger">Header Options</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="features-header-1.html">Default</a></li>
                <li><a tabindex="-1" href="features-header-2.html">Option 2</a></li>
                <li><a tabindex="-1" href="features-header-3.html">Option 3</a></li>
                <li><a tabindex="-1" href="features-header-parallax.html">Parallax</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a class="trigger">Team Member Options</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="features-team-members-1.html">Option 1</a></li>
                <li><a tabindex="-1" href="features-team-members-2.html">Option 2</a></li>
            </ul>
        </li>
        <li><a href="features-recent-projects.html">Recent Projects</a></li>
        <li class="dropdown-submenu">
            <a class="trigger">Footer Options</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="features-footer-options.html">Dark</a></li>
                <li><a tabindex="-1" href="features-footer-options-2.html">Light</a></li>
            </ul>
        </li>
        <li><a href="features-image-video-zoom.html">Image &amp; Video Zoom</a></li>
    </ul>
</li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-delay="300" data-close-others="true">Portfolio<span class="fa fa-angle-down dropdown-arrow"></span></a>
    <ul class="dropdown-menu">
        <li class="dropdown-submenu">
            <a class="trigger">Boxed</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="portfolio-fixed-3-columns.html">3 Columns</a></li>
                <li><a tabindex="-1" href="portfolio-fixed-4-columns.html">4 Columns</a></li>
                <li><a tabindex="-1" href="portfolio-fluid-boxed.html">Fluid</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a class="trigger">Circle</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="portfolio-fixed-3-columns-circle.html">3 Columns</a></li>
                <li><a tabindex="-1" href="portfolio-fixed-4-columns-circle.html">4 Columns</a></li>
                <li><a tabindex="-1" href="portfolio-fluid-circle.html">Fluid</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a class="trigger">Borderless</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="portfolio-borderless-example.html">Borderless Example</a></li>
                <li><a tabindex="-1" href="portfolio-fluid-borderless.html">Fluid</a></li>
            </ul>
        </li>
        <li><a href="portfolio-single-project.html">Single Project</a></li>
    </ul>
</li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-delay="300" data-close-others="true">Blog<span class="fa fa-angle-down dropdown-arrow"></span></a>
    <ul class="dropdown-menu">
        <li><a href="blog-posts-1.html">Posts 1 Column</a></li>
        <li><a href="blog-single-post.html">Single Post</a></li>
    </ul>
</li>
<li><a href="pages-contact-2.html">Contact</a></li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle dropdown-form-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
    <ul class="dropdown-menu dropdown-menu-user">
        <li id="dropdownForm">
            <div class="dropdown-form">
                <form class="form-default form-inline p15">
                    <div class="input-group">
                        <input type="text" class="form-control search-input" placeholder="Search...">
			                                            <span class="input-group-btn">
			                                                <button class="btn btn-rw btn-primary search-btn" type="button">Go!</button>
			                                            </span>
                    </div><!-- /input group -->
                </form><!-- /searh form -->
            </div><!-- /dropdown form -->
        </li><!-- /dropdownForm list item -->
    </ul><!-- /search dropdown -->
</li><!-- /search navbar list item -->
</ul><!-- /navbar right -->
</nav><!-- /nav -->

</div><!-- /container header -->
</div><!-- /navbar -->
<!-- End Navigation -->

<!-- Begin Page Header -->
<div class="header">
    <div class="container">
        <div class="row">
            <!-- Page Title -->
            <div class="col-sm-6 col-xs-12">
                <h1>Timeline</h1>
            </div>

            <!-- Breadcrumbs -->
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li><span class="ion-home breadcrumb-home"></span><a href="index.html">Home</a></li>
                    <li>Pages</li>
                    <li>Timeline</li>
                </ol>
            </div><!-- /column -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /page header -->

</header><!-- /header -->
<!-- End Header -->

<!-- Begin Content Section -->
<section>
    <div class="container">

        <ul class="timeline no-margin">
            <!-- Left -->
            <li>
                <div class="timeline-badge"></div>
                <div class="timeline-panel">
                    <div class="heading"><h4>Released a theme</h4><small class="heading-caption hidden-xs"><i class="glyphicon glyphicon-time"></i> 10 Days</small></div>
                    <div class="timeline-body">
                        <a href="#" class="thumbnail pull-left no-margin mr20 hidden-xs" style="width:90px;">
                            <img class="img-responsive" src="images/projects/thumbs/print1.jpg" alt="Thumbnail" style="width:90px;">
                        </a>
                        <p>Praesent sollicitudin rutrum eros a varius. Integer imperdiet lectus nec turpis consectetur, quis tempus arcu auctor. Etiam faucibus <a class="tooltip-active" data-toggle="tooltip" data-placement="right" title="Tooltip on right">tooltip right</a> libero in ex ultrices tincidunt. Integer semper sollicitudin tincidunt. Aenean volutpat velit orci, ut elementum est condimentum at. Sed pretium efficitur eros sit amet imperdiet. Curabitur id feugiat sapien. </p>
                    </div>
                </div>
            </li>

            <!-- Right -->
            <li class="timeline-inverted">
                <div class="timeline-badge warning"></div>
                <div class="timeline-panel">
                    <div class="heading"><h4>Opened our own office</h4><small class="heading-caption hidden-xs"><i class="glyphicon glyphicon-time"></i> 2 Months</small></div>
                    <div class="timeline-body">
                        <p class="mb10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris iaculis pellentesque lacinia. Donec sed neque at diam sollicitudin pellentesque. Nunc nec felis vitae mauris tincidunt aliquam ut sit amet urna. Aenean volutpat velit orci, ut elementum est condimentum at.</p>
                        <ul class="list-arrow-color no-margin">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Etiam faucibus libero in ex ultrices tincidunt</li>
                            <li>Integer semper sollicitudin tincidunt</li>
                        </ul>
                    </div>
                </div>
            </li>

            <!-- Left -->
            <li>
                <div class="timeline-badge danger"></div>
                <div class="timeline-panel">
                    <div class="heading"><h4>Worked with flexible™</h4><small class="heading-caption hidden-xs"><i class="glyphicon glyphicon-time"></i> 1 Year</small></div>
                    <div class="timeline-body">
                        <p class="mb15">Praesent sollicitudin rutrum eros a varius. Integer imperdiet lectus nec turpis consectetur, quis tempus arcu auctor. Etiam faucibus libero in ex ultrices tincidunt. Integer semper sollicitudin tincidunt. Aenean volutpat velit orci, ut elementum est condimentum at. Sed pretium efficitur eros sit amet imperdiet. Curabitur id feugiat sapien. </p>
                        <p class="progress-head">Web Design <span class="pull-right">100%</span></p>
                        <div class="progress thin">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                <span class="sr-only">100% Complete (success)</span>
                            </div>
                        </div>
                        <p class="progress-head">Script <span class="pull-right">72%</span></p>
                        <div class="progress thin">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                                <span class="sr-only">72% Complete</span>
                            </div>
                        </div>
                        <p class="progress-head">Hacking <span class="pull-right">58%</span></p>
                        <div class="progress thin">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 58%">
                                <span class="sr-only">58% Complete (warning)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <!-- Right -->
            <li class="timeline-inverted">
                <div class="timeline-badge primary"></div>
                <div class="timeline-panel">
                    <div class="timeline-body">
                        <p>Praesent sollicitudin rutrum eros a varius. Integer imperdiet lectus nec turpis consectetur, quis tempus arcu auctor. Etiam faucibus libero in ex ultrices tincidunt. Integer semper sollicitudin tincidunt. Aenean volutpat velit orci, ut elementum est condimentum at. Sed pretium efficitur eros sit amet imperdiet. Curabitur id feugiat sapien. </p>
                        <a href="#" class="btn btn-rw btn-primary mt10">Buy Now</a>
                    </div>
                </div>
            </li>

            <!-- Left -->
            <li>
                <div class="timeline-badge info"></div>
                <div class="timeline-panel">
                    <div class="timeline-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Do you flex?
                                </label>
                            </div>
                            <button type="submit" class="btn btn-rw btn-primary">Submit</button>
                        </form><!-- /form -->
                    </div>
                </div>
            </li>

            <!-- Left -->
            <li class="hidden-xs">
                <div class="timeline-panel">
                    <div class="timeline-body">
                        <!-- Basic Table -->
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                            </thead><!-- /table header -->
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody><!-- /table body -->
                        </table><!-- /basic table -->
                    </div>
                </div>
            </li>

            <!-- Right -->
            <li class="timeline-inverted">
                <div class="timeline-badge success"></div>
                <div class="timeline-panel">
                    <div class="timeline-body">
                        <!-- Content 1 -->
                        <div class="col-lg-6 col-sm-12">
                            <h4><span class="ion-beaker bordered-icon-sm mr15"></span> Parallax.</h4>
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum in mauris at sollicitudin lacinia.</p>
                        </div>
                        <!-- Content 2 -->
                        <div class="col-lg-6 col-sm-12 mt15-lg">
                            <h4><span class="ion-beer bordered-icon-sm mr15"></span> Animate.</h4>
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum in mauris at sollicitudin lacinia.</p>
                        </div>
                    </div>
                </div>
            </li>

            <!-- Left -->
            <li>
                <div class="timeline-badge primary"></div>
                <div class="timeline-panel text-center">
                    <div class="heading"><h4>Any kind of content</h4></div>
                    <div class="timeline-body">
                        <div class="cta2 arrow-up mt30 p15">
                            <div class="text-left"><!-- //add container, columns, or rows if needed. -->
                                <p>I am oh so <b>flexible</b>. You can put any of the features in here to compose your own story or timeline. I hope I help at least a little bit with your story?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

    </div><!-- /container -->
</section><!-- /section -->
<!-- End Content Section -->

<!-- Begin Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- About -->
            <div class="col-sm-3">
                <div class="heading-footer"><h4>About</h4></div>
                <p>Raleway Bootstrap 3 Template is what you need for your next project or client.</p>
                <a href="features.html" class="btn btn-primary btn-rw mt10">
                    Buy now
                </a>
            </div>

            <!-- Social -->
            <div class="col-sm-3 mg25-xs">
                <div class="heading-footer"><h4>Social Networks</h4></div>
                <a class="btn btn-social-icon btn-twitter btn-lg">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="btn btn-social-icon btn-instagram btn-lg">
                    <i class="fa fa-instagram"></i>
                </a>
                <a class="btn btn-social-icon btn-facebook btn-lg">
                    <i class="fa fa-facebook"></i>
                </a>
                <a class="btn btn-social-icon btn-vimeo btn-lg">
                    <i class="fa fa-vimeo-square"></i>
                </a>
                <a class="btn btn-social-icon btn-linkedin btn-lg">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a class="btn btn-social-icon btn-google-plus btn-lg">
                    <i class="fa fa-google-plus"></i>
                </a>
                <a class="btn btn-social-icon btn-adn btn-lg">
                    <i class="fa fa-adn"></i>
                </a>
                <a class="btn btn-social-icon btn-bitbucket btn-lg">
                    <i class="fa fa-bitbucket"></i>
                </a>
                <a class="btn btn-social-icon btn-tumblr btn-lg">
                    <i class="fa fa-tumblr"></i>
                </a>
                <a class="btn btn-social-icon btn-flickr btn-lg">
                    <i class="fa fa-flickr"></i>
                </a>
            </div>

            <!-- Contact -->
            <div class="col-sm-3 mg25-xs">
                <div class="heading-footer"><h4>Contact us</h4></div>
                <p><span class="ion-home footer-info-icons"></span><small class="address">228 Park Ave S New York, NY 10003</small></p>
                <p><span class="ion-email footer-info-icons"></span><small class="address"><a href="mailto:info@raleway.com">info@raleway.com</a></small></p>
                <p><span class="ion-ios7-telephone footer-info-icons"></span><small class="address">+11192386513</small></p>
            </div>

            <!-- Recent Work -->
            <div class="col-sm-3 hidden-xs">
                <div class="heading-footer"><h4>Recent Work</h4></div>
                <div class="col-xs-4 recent-work-padding">
                    <a href="images/projects/web2.jpg" class="thumbnail image-zoom-link">
                        <img src="images/projects/thumbs/web2.jpg" alt="..." class="thumbnail img-responsive">
                    </a>
                </div>
                <div class="col-xs-4 recent-work-padding">
                    <a href="images/projects/web3.jpg" class="thumbnail image-zoom-link">
                        <img src="images/projects/thumbs/web3.jpg" alt="..." class="thumbnail img-responsive">
                    </a>
                </div>
                <div class="col-xs-4 recent-work-padding">
                    <a href="images/projects/illustration1.jpg" class="thumbnail image-zoom-link">
                        <img src="images/projects/thumbs/illustration1.jpg" alt="..." class="thumbnail img-responsive">
                    </a>
                </div>
            </div>
        </div><!-- /row -->

        <!-- Copyright -->
        <div class="row">
            <hr class="dark-hr">
            <div class="col-sm-11 col-xs-10">
                <p class="copyright">© 2013 Raleway. All rights reserved. Theme by <b>Denis Samardjiev</b>.</p>
            </div>
            <div class="col-sm-1 col-xs-2 text-right">
                <a href="#" class="scroll-top"><div class="footer-scrolltop-holder"><span class="ion-ios7-arrow-up footer-scrolltop"></span></div></a>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</footer><!-- /footer -->
<!-- End Footer -->

</div><!-- /boxed -->
</div><!-- /bg boxed-->
<!-- End Boxed or Fullwidth Layout -->

<!-- Javascript Files -->
<script type="text/javascript" src="{{ elixir( 'js/app-libs.js' ) }}"></script>
<script type="text/javascript" src="{{ elixir( 'js/app-code.js' ) }}"></script>
</body>
</html>
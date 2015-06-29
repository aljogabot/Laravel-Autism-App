<!-- Begin Header -->
<header>

    <!-- Begin Top Bar -->
    @include( 'public.blocks.topbar' )
    <!-- End Top Bar -->

    <!-- Login -->
    @include( 'public.auth.login' )
    <!-- End Login -->

    <!-- Begin Logout -->
    @include( 'public.auth.logout' )
    <!-- End Logout -->

    <!-- Begin Navigation -->
    <div class="navbar">
        <div class="container container-header">
            <div class="navbar-header">
                <!-- Brand -->
                <a href="{{ url( '/' ) }}" class="navbar-brand" style="width: 420px;">
                    <div class="css-logo" style="margin-top: 9px; margin-right: 12px"></div>
                    <!--<img src="images/logo2.png" class="raleway-logo" alt="Autism Speaks">-->
                    <h1>Autism Social PH</h1>
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
                        <a href="{{ url( '/' ) }}">
                            Home
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true">
                            About Autism
                        <span class="fa fa-angle-down dropdown-arrow"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:void(0);">Cause</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Symptoms</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="trigger">Footer Options</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="features-footer-options.html">Dark</a></li>
                                    <li><a tabindex="-1" href="features-footer-options-2.html">Light</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ url( 'timeline' ) }}">
                            Discussions
                        </a>
                    </li>
                    <li>
                        <a href="{{ url( 'contact' ) }}">Contact Us</a>
                    </li>
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
                    <h1>@yield( 'page_name' )</h1>
                </div>

                <!-- Breadcrumbs -->
                <div class="col-sm-6">
                    {!! Breadcrumbs::render() !!}
                </div><!-- /column -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /page header -->

</header><!-- /header -->
<!-- End Header -->
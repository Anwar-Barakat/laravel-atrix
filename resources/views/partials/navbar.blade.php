<header class="main-header">
    <!-- header-top-one -->

    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box py-0">
                    <figure class="logo"><a href="{{ route('pages.home') }}"><img src="{{ asset('assets/images/learningCurveLogo.jpeg') }}" alt="Learning Curve"></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix home-menu">
                                <li class="dropdown {{ request()->routeIs('pages.home') ? 'current' : '' }}"><a href="{{ route('pages.home') }}">Home</a></li>
                                <li class="dropdown {{ request()->routeIs('pages.about-us') ? 'current' : '' }}"><a href="{{ route('pages.about-us') }}">About Us</a></li>
                                <li class="dropdown {{ request()->routeIs('pages.projects.index') ? 'current' : '' }}">
                                    <a href="{{ route('pages.projects.index') }}">Projects</a></li>
                                <li class="dropdown {{ request()->routeIs('pages.teams.index') ? 'current' : '' }}"><a href="{{ route('pages.teams.index') }}">Team</a></li>
                                <li class="dropdown {{ request()->routeIs('contacts.index') ? 'current' : '' }}"><a href="{{ route('contacts.index') }}">Contact Us</a></li>
                                <li class="dropdown {{ request()->routeIs('articles.index') ? 'current' : '' }}"><a href="{{ route('articles.index') }}">Articles</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="btn-box">
                    <a href="{{ route('pages.projects.index') }}" class="theme-btn theme-btn-one">Our Work<i class="icon-4"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ route('pages.home') }}"><img src="assets/images/logo.png" alt=""></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <div class="btn-box">
                    <a href="{{ route('pages.projects.index') }}" class="theme-btn theme-btn-one">Our Work<i class="icon-4"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>

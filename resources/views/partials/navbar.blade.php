<header class="main-header">
    <!-- header-top-one -->
    <div class="header-top-one p_relative d_block">
        <div class="auto-container">
            <div class="top-inner clearfix p_relative">
                <div class="shape p_absolute t_0" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                <div class="top-left pull-left">
                    <ul class="social-links clearfix">
                        <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55">Follow Us:</li>
                        <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="javascript:;" class="p_relative d_iblock fs_16"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="javascript:;" class="p_relative d_iblock fs_16"><i class="fab fa-twitter"></i></a></li>
                        <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="javascript:;" class="p_relative d_iblock fs_16"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="p_relative d_iblock fs_16 float_left lh_55"><a href="javascript:;" class="p_relative d_iblock fs_16"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
                <div class="top-right pull-right">
                    <ul class="info clearfix">
                        <li class="search-box-outer search-toggler p_relative d_iblock float_left mr_60 lh_55">
                            <i class="icon-1"></i>
                        </li>
                        <li class="p_relative d_iblock float_left mr_60 lh_55 pl_25 fs_16">
                            <i class="icon-2"></i>
                            <p><a href="tel:123045615523">Post Box 213580, Dubai, UAE</a></p>
                        </li>
                        <li class="p_relative d_iblock float_left lh_55 pl_25 fs_16">
                            <i class="icon-3"></i>
                            <p>Email: <a href="mailto:info@learningcurve.ae">info@learningcurve.ae</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="javascript:;"><img src="assets/images/logo.png" alt=""></a></figure>
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
                                <li class="dropdown {{ request()->routeIs('pages.home') ? 'current' : '' }}">
                                    <a href="{{ route('pages.home') }}">Home</a>
                                </li>
                                <li class="dropdown {{ request()->routeIs('pages.about-us') ? 'current' : '' }}">
                                    <a href="{{ route('pages.about-us') }}">About Us</a>
                                </li>
                                <li class="dropdown {{ request()->routeIs('pages.projects.index') ? 'current' : '' }}">
                                    <a href="{{ route('pages.projects.index') }}">Projects</a>
                                    {{-- <ul>
                                        <li><a href="javascript:;">Project Style 1</a></li>
                                        <li><a href="javascript:;">Project Style 2</a></li>
                                        <li><a href="javascript:;">Project Style 3</a></li>
                                        <li><a href="javascript:;">Project Style 4</a></li>
                                        <li><a href="javascript:;">Project Style 5</a></li>
                                        <li><a href="javascript:;">Project Style 6</a></li>
                                        <li class="dropdown"><a href="javascript:;">Project Details</a>
                                            <ul>
                                                <li><a href="javascript:;">Project Details 1</a></li>
                                                <li><a href="javascript:;">Project Details 2</a></li>
                                                <li><a href="javascript:;">Project Details 3</a></li>
                                                <li><a href="javascript:;">Project Details 4</a></li>
                                                <li><a href="javascript:;">Project Details 5</a></li>
                                            </ul>
                                        </li>
                                    </ul> --}}
                                </li>
                                <li class="dropdown {{ request()->routeIs('pages.teams.index') ? 'current' : '' }}"><a href="{{ route('pages.teams.index') }}">Team</a></li>
                                <li class="dropdown {{ request()->routeIs('contacts.index') ? 'current' : '' }}"><a href="{{ route('contacts.index') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="btn-box">
                    <a href="javascript:;" class="theme-btn theme-btn-one">Get A Quote<i class="icon-4"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="javascript:;"><img src="assets/images/logo.png" alt=""></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <div class="btn-box">
                    <a href="javascript:;" class="theme-btn theme-btn-one">Get A Quote<i class="icon-4"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>

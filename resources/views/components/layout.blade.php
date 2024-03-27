<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>{{ $title ?? 'Atrix Project' }}</title>

    @include('partials.header')
</head>
<body>
    {{-- {{ $slot }} --}}
    <div class="boxed_wrapper">

        <!-- mouse-pointer -->
        <div class="mouse-pointer display_none" id="mouse-pointer">
            <div class="icon"><i class="far fa-angle-left"></i><i class="far fa-angle-right"></i></div>
        </div>
        <!-- mouse-pointer end -->


        <!-- preloader -->
        {{-- @include('partials.preloader') --}}
        <!-- preloader end -->


        <!--Search Popup-->
        @include('partials.search-popup')


        <!-- sidebar cart item -->
        @include('partials.sidebar-cart-item')
        <!-- END sidebar widget item -->


        <!-- main header -->
        @include('partials.navbar')
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        @include('partials.mobile-menu')
        <!-- End Mobile Menu -->

        {{-- Content --}}
        {{ $slot }}

        <!-- footer-three -->
        @include('partials.footer')
        <!-- footer-three end -->


        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text g_color_2">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->
    </div>

    @include('partials.footer-scripts')
</body>
</html>

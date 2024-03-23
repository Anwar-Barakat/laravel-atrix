<x-layout>

    <x-slot name="title">
        Project Detail Page
    </x-slot>

    <!-- Page Title -->
    <section class="page-title style-two p_relative centred">
        <div class="pattern-layer">
            <div class="shape-1 p_absolute l_120 t_60 rotate-me" style="background-image: url(assets/images/shape/shape-176.png);"></div>
            <div class="shape-2 p_absolute t_120 r_170 float-bob-y" style="background-image: url(assets/images/shape/shape-56.png);"></div>
        </div>
        <div class="auto-container">
            <div class="content-box">
                <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Artboard Studio</h1>
                <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                    <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="{{ route('pages.home') }}">Home</a></li>
                    <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20">Project</li>
                    <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Project Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- project-details -->
    <section class="project-details project-details-3 p_relative pb_110">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="project-sidebar">
                        <div class="text p_relative d_block mb_25">
                            <h3 class="d_block fs_30 lh_40 fw_sbold mb_25">Project Info</h3>
                            <p class="font_family_poppins">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                        </div>
                        <div class="project-info p_relative d_block mb_110">
                            <div class="info p_relative d_block">
                                <ul class="info-list clearfix">
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12"><span class="d_iblock fw_medium color_black">Client:</span>Robertson</li>
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12"><span class="d_iblock fw_medium color_black">Date:</span>November, 2021</li>
                                    <li class="p_relative d_block fs_18 font_family_inter mb_12"><span class="d_iblock fw_medium color_black">Client:</span><a href="javascript:;">Business</a>, <a href="javascript:;">Invest</a></li>
                                    <li class="social-links p_relative d_block fs_18 font_family_inter"><span class="d_iblock fw_medium color_black">Social:</span><a href="javascript:;"><i class="fab fa-facebook-f"></i></a><a href="javascript:;"><i class="fab fa-twitter"></i></a><a href="javascript:;"><i class="fab fa-pinterest-p"></i></a><a href="javascript:;"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="project-details-content p_relative d_block ml_50 mb_110">
                        <div data-animation-box class="image-box p_relative d_block mb_65">
                            <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="assets/images/project/project-96.jpg" class="lightbox-image" data-fancybox="gallery">
                                    <img src="{{ asset('assets/images/project/project-96.jpg') }}" alt=""></a></figure>
                        </div>
                        <div class="text p_relative d_block mb_65">
                            <h3 class="d_block fs_24 lh_30 fw_sbold mb_15">Artboard Studio</h3>
                            <p class="font_family_poppins mb_25">Exercitation ullamco laboris nisi ut aliquip ex commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. excepteur sint occae cat cupidatat non proident sunt in culpa officia deseunt molit anim est laborum Sed perspiciatis unde omnis iste natus error sit voluptatem acusantium dolore mque laudantium, totam rem aperiam eaque.</p>
                            <p class="font_family_poppins">Abodit ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conse quuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                        <div data-animation-box class="image-box p_relative d_block mb_65">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="assets/images/project/project-97.jpg" class="lightbox-image" data-fancybox="gallery">
                                            <img src="{{ asset('assets/images/project/project-97.jpg') }}" alt=""></a></figure>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="assets/images/project/project-98.jpg" class="lightbox-image" data-fancybox="gallery">
                                            <img src="{{ asset('assets/images/project/project-98.jpg') }}" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                        <div class="text">
                            <p class="font_family_poppins">Aliquip ex commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. excepteur sint occae cat cupidatat non proident sunt in culpa officia deseunt molit anim est laborum Sed perspiciatis unde omnis iste natus error sit voluptatem acusantium.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-btn clearfix">
                <div class="single-btn prev-btn pull-left">
                    <a href="javascript:;" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black"><i class="far fa-long-arrow-left"></i>Prev Project</a>
                </div>
                <div class="single-btn next-btn pull-right">
                    <a href="javascript:;" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black">Next Project<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- project-details end -->

</x-layout>

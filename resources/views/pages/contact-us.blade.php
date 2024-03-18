<x-layout>

    <x-slot name="title">
        Contact Us Page
    </x-slot>


    <!-- Page Title -->
    <section class="page-title style-two p_relative centred">
        <div class="pattern-layer">
            <div class="shape-1 p_absolute l_120 t_60 rotate-me" style="background-image: url(assets/images/shape/shape-176.png);"></div>
            <div class="shape-2 p_absolute t_120 r_170 float-bob-y" style="background-image: url(assets/images/shape/shape-56.png);"></div>
        </div>
        <div class="auto-container">
            <div class="content-box">
                <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Contact Us</h1>
                <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                    <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="index.html">Home</a></li>
                    <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20">Pages</li>
                    <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- contact-seven end -->
    <section class="contact-seven p_relative pb_150">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                    <div class="info-inner">
                        <div class="sec-title p_relative d_block mb_30">
                            <h3 class="d_block fs_30 lh_40 fw_bold mb_25">Get In Touch</h3>
                            <p class="font_family_poppins color_black">Give us a call or drop by anytime, we answer all enquiries within 24 hours.</p>
                        </div>
                        <ul class="info-list clearfix">
                            <li class="p_relative d_block pl_45 mb_20">
                                <div class="icon-box p_absolute l_0 t_2 d_iblock fs_30 z_1 tran_5">
                                    <div class="icon p_relative d_iblock"><i class="icon-180"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-133.png" alt=""></div>
                                </div>
                                <p class="font_family_inter color_black">629 12th St, Modesto, CA 95354 United States</p>
                            </li>
                            <li class="p_relative d_block pl_45 mb_20">
                                <div class="icon-box p_absolute l_0 t_0 d_iblock fs_30 z_1 tran_5">
                                    <div class="icon p_relative d_iblock"><i class="icon-181"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-134.png" alt=""></div>
                                </div>
                                <p class="font_family_inter color_black"><a href="mailto:example@gmail.com">example@gmail.com</a></p>
                            </li>
                            <li class="p_relative d_block pl_45">
                                <div class="icon-box p_absolute l_0 t_0 d_iblock fs_30 z_1 tran_5">
                                    <div class="icon p_relative d_iblock"><i class="icon-182"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-135.png" alt=""></div>
                                </div>
                                <p class="font_family_inter color_black"><a href="tel:11165458856">+(111)65-458-856</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                    <div class="form-inner p_relative ml_40">
                        <form method="post" action="sendemail.php" id="contact-form" novalidate="novalidate">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Your Name" required="" aria-required="true">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email Address" required="" aria-required="true">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" required="" placeholder="Phone Number" aria-required="true">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" required="" placeholder="Subject" aria-required="true">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Leave A Comment"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn theme-btn-eight" type="submit" name="submit-form">Send Message <i class="icon-4"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-seven end -->
</x-layout>
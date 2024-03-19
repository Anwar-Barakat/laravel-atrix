<x-layout>
    <x-slot name="title">
        Team Detail Page
    </x-slot>


    <!-- Page Title -->
    <section class="page-title p_relative centred">
        <div class="pattern-layer">
            <div class="shape-1 p_absolute l_120 t_120 rotate-me" style="background-image: url(assets/images/shape/shape-176.png);"></div>
            <div class="shape-2 p_absolute t_180 r_170 float-bob-y" style="background-image: url(assets/images/shape/shape-56.png);"></div>
            <div class="shape-3 p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-189.png);"></div>
        </div>
        <div class="auto-container">
            <div class="content-box">
                <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Mohammad Riad Al-Merabi</h1>
                <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                    <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="{{ route('pages.home') }}">Home</a></li>
                    <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20">Pages</li>
                    <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Mohammad Riad Al-Merabi</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- team-details -->
    <section class="team-details-two p_relative pt_130 pb_110">
        <div class="auto-container">
            <div class="team-details-content p_relative d_block mb_110 b_radius_10 pt_100 pr_100 pb_100 pl_100 b_shadow_6">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                        <figure class="image-box p_relative d_block b_radius_10 mr_20"><img src="{{ asset('assets/images/resource/chooseus-7.jpg') }}" alt=""></figure>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                        <div class="content-box p_relative d_block ml_20">
                            <h2 class="d_block fs_40 lh_50 fw_bold mb_8">Mohammad Riad Al-merabi</h2>
                            <span class="designation p_relative d_block fs_16 fw_medium font_family_poppins mb_25">Senior Leadership And Academic Advisor</span>
                            {{-- <p class="font_family_poppins mb_25">Lorem ipsum dolor sit amet, consectetur elit sed do eius mod tempor incidid labore.</p> --}}
                            <ul class="info clearfix p_relative d_block mb_30">
                                <li class="p_relative d_block fs_16 font_family_poppins mb_8"><strong class="fw_sbold color_black p_relative d_iblock">Responsibility:</strong>Lead Developer</li>
                                <li class="p_relative d_block fs_16 font_family_poppins mb_8"><strong class="fw_sbold color_black p_relative d_iblock">Address:</strong>Post Box 213580, Dubai, UAE</li>
                                <li class="p_relative d_block fs_16 font_family_poppins mb_8"><strong class="fw_sbold color_black p_relative d_iblock">Experience:</strong>7 Years</li>
                                <li class="p_relative d_block fs_16 font_family_poppins mb_8"><strong class="fw_sbold color_black p_relative d_iblock">Email:</strong><a href="mailto:info@learningcurve.ae">info@learningcurve.ae</a></li>
                                <li class="p_relative d_block fs_16 font_family_poppins"><strong class="fw_sbold color_black p_relative d_iblock">Phone:</strong><a href="tel:23055873407">+2(305) 587-3407</a></li>
                            </ul>
                            <ul class="social-links clearfix">
                                <li class="p_relative d_iblock pull-left mr_20"><a href="team-details.html" class="p_relative d_iblock w_45 h_45 lh_45 centred b_radius_50 fs_15"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="p_relative d_iblock pull-left mr_20"><a href="team-details.html" class="p_relative d_iblock w_45 h_45 lh_45 centred b_radius_50 fs_15"><i class="fab fa-twitter"></i></a></li>
                                <li class="p_relative d_iblock pull-left"><a href="team-details.html" class="p_relative d_iblock w_45 h_45 lh_45 centred b_radius_50 fs_15"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-content">
                <div class="text">
                    <h4 class="d_block fs_24 lh_30 mb_16">Personal Info</h4>
                    <p class="font_family_poppins mb_25">A passionate educator with over 42 years of experience in the field of international education. Mohammad has accumulated solid credentials by establishing and running several educational institutions since the early days of the UAE. </p>
                    <p class="font_family_poppins mb_25">After completing his MA in Education in 1976, from California State University, Mohammed returned to the region to assist in improvement of the Lebanese Educational Sector. </p>
                    <p class="font_family_poppins mb_25">
                        In September 1987, he established Dubai National School which adopted both American and British curriculums. The continued success inspired two other branches with a strategic plan to expand the American curriculum and the UAE curriculum giving DNS an excellent reputation for providing a high quality international education for local and foreign students from KG to High School, with an emphasis on Arabic and Islamic values and code of ethics.
                    </p>
                    <p class="font_family_poppins mb_25">
                        Under his leadership and determination to offer the best education possible, DNS Al Barsha branch was the first school in Dubai and the second in the UAE to be awarded an International Accreditation Status from New England Association of Schools and Colleges (NEASC) through the Commission on American and International Schools abroad (CAISA) in May 2003. Since then, Mohammed has successfully restructured many academic institutions by executing the highest academic and operational plans.
                    </p>
                    <p class="font_family_poppins">
                        Mohammed was also awarded the prestigious Sheikh Hamdan Bin Rashed Al Maktoum Award for Excellent Academic Achievement for Best School and Best Administration for the Year 1999-2000.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- team-details end -->
</x-layout>

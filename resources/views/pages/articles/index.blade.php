<x-layout>

    <x-slot name="title">
        Articles Page
    </x-slot>





    <!-- Page Title -->
    <section class="page-title p_relative centred">
        <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/page-title-5.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Articles</h1>
                <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                    <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20"><a href="index.html">Home</a></li>
                    <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter">Article</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- sidebar-page-container -->
    <section class="sidebar-page-container p_relative sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                    <div class="blog-standard-content p_relative d_block mr_20">
                        @forelse ($articles as $article)
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pb_70 mb_70">
                                <div class="image-box p_relative d_block">
                                    <figure class="image p_relative d_block b_radius_5">
                                        <a href="{{ route('articles.comments.index',['article'=>$article]) }}">
                                            <img src="{{ url('storage/'.$article->thumbnail) }}" alt=""></a></figure>
                                </div>
                                <div class="lower-content p_relative d_block pt_35">
                                    <div class="category p_relative d_block mb_4">
                                       @forelse ($article->tags as $tag)
                                       <a href="{{ route('articles.comments.index',['article'=>$article]) }}" class="d_iblock fs_16 font_family_poppins uppercase">{{ $tag }}</a>
                                       @empty
                                       @endforelse
                                    </div>
                                    <h2 class="d_block fs_30 lh_40 fw_sbold mb_5"><a href="{{ route('articles.comments.index',['article'=>$article]) }}" class="d_iblock color_black">{{ $article->title }}</a></h2>
                                    <ul class="post-info clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock float_left mr_30 fs_16">{{ Carbon\Carbon::parse($article->created_at)->format('d F Y') }}</li>
                                        {{-- <li class="p_relative d_iblock float_left fs_16">2 Comments</li> --}}
                                    </ul>
                                    <p class="d_block font_family_poppins mb_30">
                                        {!!  Str::limit($article->content, 200) !!}
                                    </p>
                                    <div class="btn-box">
                                        <a href="{{ route('articles.comments.index',['article'=>$article]) }}" class="theme-btn theme-btn-six">Read More <i class="icon-4"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <h2>No Articles Yet</h2>
                        </div>
                        @endforelse
                    </div>
                    {{ $articles->links('pagination::default') }}
                </div>
                {{-- <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar p_relative d_block ml_20">
                        <div class="sidebar-widget search-widget p_relative d_block pt_35 pr_40 pb_40 pl_40 b_radius_10 mb_70">
                            <div class="widget-title p_relative d_block mb_35">
                                <h3 class="d_block fs_24 lh_30">Search</h3>
                            </div>
                            <div class="search-inner">
                                <form action="blog.html" method="post" class="search-form">
                                    <div class="form-group p_relative m_0">
                                        <input type="search" name="search-field" placeholder="Search" required>
                                        <button type="submit"><i class="icon-156"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget category-widget p_relative d_block pt_35 pr_40 pb_35 pl_40 b_radius_10 mb_70">
                            <div class="widget-title p_relative d_block mb_25">
                                <h3 class="d_block fs_24 lh_30">Categories</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li class="p_relative d_block mb_11"><a href="javascript:;" class="p_relative d_iblock fs_16 font_family_poppins color_black">Business (3)</a></li>
                                    <li class="p_relative d_block mb_11"><a href="javascript:;" class="p_relative d_iblock fs_16 font_family_poppins color_black">Design (7)</a></li>
                                    <li class="p_relative d_block mb_11"><a href="javascript:;" class="p_relative d_iblock fs_16 font_family_poppins color_black">Development (2)</a></li>
                                    <li class="p_relative d_block mb_11"><a href="javascript:;" class="p_relative d_iblock fs_16 font_family_poppins color_black">Software (1)</a></li>
                                    <li class="p_relative d_block mb_11"><a href="javascript:;" class="p_relative d_iblock fs_16 font_family_poppins color_black">Tecnology (3)</a></li>
                                    <li class="p_relative d_block"><a href="javascript:;" class="p_relative d_iblock fs_16 font_family_poppins color_black">General (9)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget post-widget p_relative d_block pt_35 pr_40 pb_20 pl_40 b_radius_10 mb_70">
                            <div class="widget-title p_relative d_block mb_30">
                                <h3 class="d_block fs_24 lh_30">Recent Posts</h3>
                            </div>
                            <div class="post-inner">
                                <div class="post p_relative d_block pl_100 pb_20 mb_16">
                                    <figure class="post-thumb p_absolute l_0 t_4 w_80 h_80 b_radius_5"><a href="javascript:;"><img src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                    <h5 class="d_block fs_18 lh_24 mb_7"><a href="javascript:;" class="d_iblock color_black">How can you help your team...</a></h5>
                                    <span class="post-date p_relative d_block fs_16 font_family_poppins">Oct 20, 2021</span>
                                </div>
                                <div class="post p_relative d_block pl_100 pb_20 mb_16">
                                    <figure class="post-thumb p_absolute l_0 t_4 w_80 h_80 b_radius_5"><a href="javascript:;"><img src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                    <h5 class="d_block fs_18 lh_24 mb_7"><a href="javascript:;" class="d_iblock color_black">Are enterprise team the next...</a></h5>
                                    <span class="post-date p_relative d_block fs_16 font_family_poppins">Oct 20, 2021</span>
                                </div>
                                <div class="post p_relative d_block pl_100 pb_20">
                                    <figure class="post-thumb p_absolute l_0 t_4 w_80 h_80 b_radius_5"><a href="javascript:;"><img src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                    <h5 class="d_block fs_18 lh_24 mb_7"><a href="javascript:;" class="d_iblock color_black">The most import- ant design jobs...</a></h5>
                                    <span class="post-date p_relative d_block fs_16 font_family_poppins">Oct 20, 2021</span>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget archives-widget p_relative d_block pt_35 pr_40 pb_35 pl_40 b_radius_10 mb_70">
                            <div class="widget-title p_relative d_block mb_25">
                                <h3 class="d_block fs_24 lh_30">Archives</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="archives-list clearfix">
                                    <li class="p_relative d_block mb_11"><a href="javascript:;" class="p_relative d_iblock fs_16 font_family_poppins color_black">2016 Nevember (3)</a></li>
                                    <li class="p_relative d_block mb_11"><a href="javascript:;" class="p_relative d_iblock fs_16 font_family_poppins color_black">2017 December (7)</a></li>
                                    <li class="p_relative d_block mb_11"><a href="javascript:;" class="p_relative d_iblock fs_16 font_family_poppins color_black">2018 January (2)</a></li>
                                    <li class="p_relative d_block mb_11"><a href="javascript:;" class="p_relative d_iblock fs_16 font_family_poppins color_black">2019 February (1)</a></li>
                                    <li class="p_relative d_block mb_11"><a href="javascript:;" class="p_relative d_iblock fs_16 font_family_poppins color_black">Tecnology (3)</a></li>
                                    <li class="p_relative d_block"><a href="javascript:;" class="p_relative d_iblock fs_16 font_family_poppins color_black">2020 March (3)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget tags-widget p_relative d_block pt_35 pr_40 pb_30 pl_40 b_radius_10">
                            <div class="widget-title p_relative d_block mb_35">
                                <h3 class="d_block fs_24 lh_30">Tags</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="tags-list clearfix">
                                    <li class="p_relative d_iblock pull-left mr_5 ml_5 mb_10"><a href="javascript:;" class="d_iblock fs_14 font_family_poppins color_black b_radius_5">Creative</a></li>
                                    <li class="p_relative d_iblock pull-left mr_5 ml_5 mb_10"><a href="javascript:;" class="d_iblock fs_14 font_family_poppins color_black b_radius_5">Marketing</a></li>
                                    <li class="p_relative d_iblock pull-left mr_5 ml_5 mb_10"><a href="javascript:;" class="d_iblock fs_14 font_family_poppins color_black b_radius_5">Idea</a></li>
                                    <li class="p_relative d_iblock pull-left mr_5 ml_5 mb_10"><a href="javascript:;" class="d_iblock fs_14 font_family_poppins color_black b_radius_5">Consulting</a></li>
                                    <li class="p_relative d_iblock pull-left mr_5 ml_5 mb_10"><a href="javascript:;" class="d_iblock fs_14 font_family_poppins color_black b_radius_5">Target</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->
</x-layout>

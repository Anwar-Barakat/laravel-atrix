<x-layout>

    <x-slot name="title">
        Article Details
    </x-slot>


        <!-- Page Title -->
        <section class="page-title p_relative centred">
            <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url('{{ asset('storage/'.$article->thumbnail) }}');"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Article Details</h1>
                    <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20"><a href="{{ route('pages.home') }}">Home</a></li>
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20">Articles</li>
                        <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter">Article Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container blog-standard-2 blog-details p_relative sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content p_relative d_block mr_20">
                            <div class="blog-post p_relative d_block mb_60">
                                <div class="content-one p_relative d_block mb_60">
                                    <div class="post-title p_relative d_block mb_60">
                                        <div class="category p_relative d_block mb_7"><a href="javascript:;" class="d_iblock fs_16 font_family_poppins uppercase">{{ $article?->category?->name }}</a></div>
                                        <h2 class="d_block fs_40 lh_50 fw_bold mb_7">{{ $article->title }}</h2>
                                        <ul class="post-info clearfix p_relative d_block">
                                            <li class="p_relative d_iblock mr_30 fs_16">{{ $article->created_at->format('Y-m-d') }}</li>
                                            @if($article?->comments)
                                            <li class="p_relative d_iblock fs_16">{{ $article?->comments?->count() }} Comments</li>
                                            @endif
                                        </ul>
                                    </div>
                                    <figure class="image-box p_relative d_block b_radius_5 mb_65">
                                        <img src="{{ asset('storage/'.$article->thumbnail) }}" " alt=""></figure>
                                    <div class="text">
                                        <p class="font_family_poppins">{!! $article->content !!}</p>
                                    </div>
                                </div>

                            </div>
                            <div class="post-share-option clearfix p_relative d_block pt_35 pb_35 mb_70">
                                <ul class="tags-list clearfix pull-left">
                                    <li class="p_relative pull-left mr_20"><h6 class="fs_16 fw_medium lh_40">Tags:</h6></li>
                                    @foreach ($article->tags as $tag)
                                    <li class="p_relative pull-left mr_10">
                                        <a href="javascript:;" class="p_relative d_iblock fs_14 lh_20 font_family_poppins color_black b_radius_5">{{ $tag }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @forelse ($article->comments as $comment)
                            <div class="author-box p_relative d_block pt_45 pr_30 pb_40 pl_170 mb_60">
                                <figure class="">
                                    <img class="author-thumb p_absolute l_40 t_40 w_100 h_100 b_radius_50" src="https://www.shareicon.net/data/512x512/2017/01/23/874872_idea_512x512.png" width="100%" height="100%" />
                                </figure>
                                <h4 class="d_block fs_20 lh_30 mb_11">{{ $comment->name }}</h4>
                                <p class="font_family_poppins">{{ $comment->comment }}</p>
                            </div>
                            @empty

                            @endforelse

                            <div class="comments-form-area">
                                <div class="group-title p_relative d_block mb_15">
                                    <h3 class="fs_30 lh_40">Leave a Comment</h3>
                                </div>
                                <div class="form-inner">
                                    <form method="post" action="{{ route('articles.comments.store',['article'=>$article]) }}" id="contact-form">
                                        @csrf
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name" required="">
                                                @if($errors->has('name'))
                                                <label class="error">{{ $errors->first('name') }}</label>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Your email" required="">
                                                @if($errors->has('email'))
                                                <label class="error">{{ $errors->first('email') }}</label>
                                                @endif
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <input type="text" name="phone" value="{{ old('email') }}" required="" placeholder="Phone">
                                                @if($errors->has('phone'))
                                                <label class="error">{{ $errors->first('phone') }}</label>
                                                @endif
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea name="comment"  placeholder="Comment">{{ old('message') }}</textarea>
                                                @if($errors->has('comment'))
                                                <label class="error">{{ $errors->first('comment') }}</label>
                                                @endif
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                                <button type="submit" class="theme-btn theme-btn-five" type="submit">Submit <i class="icon-4"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar p_relative d_block ml_20 b_shadow_6 b_radius_10">
                            <div class="sidebar-widget search-widget p_relative d_block pt_35 pr_40 pb_30 pl_40 b_radius_10">
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
                            <div class="sidebar-widget category-widget p_relative d_block pt_35 pr_40 pb_25 pl_40 b_radius_10">
                                <div class="widget-title p_relative d_block mb_25">
                                    <h3 class="d_block fs_24 lh_30">Categories</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li class="p_relative d_block mb_11"><a href="blog-details.html" class="p_relative d_iblock fs_16 font_family_poppins color_black">Business (3)</a></li>
                                        <li class="p_relative d_block mb_11"><a href="blog-details.html" class="p_relative d_iblock fs_16 font_family_poppins color_black">Design (7)</a></li>
                                        <li class="p_relative d_block mb_11"><a href="blog-details.html" class="p_relative d_iblock fs_16 font_family_poppins color_black">Development (2)</a></li>
                                        <li class="p_relative d_block mb_11"><a href="blog-details.html" class="p_relative d_iblock fs_16 font_family_poppins color_black">Software (1)</a></li>
                                        <li class="p_relative d_block mb_11"><a href="blog-details.html" class="p_relative d_iblock fs_16 font_family_poppins color_black">Tecnology (3)</a></li>
                                        <li class="p_relative d_block"><a href="blog-details.html" class="p_relative d_iblock fs_16 font_family_poppins color_black">General (9)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget post-widget p_relative d_block pt_35 pr_40 pb_10 pl_40 b_radius_10">
                                <div class="widget-title p_relative d_block mb_30">
                                    <h3 class="d_block fs_24 lh_30">Recent Posts</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post p_relative d_block pl_100 pb_20 mb_16">
                                        <figure class="post-thumb p_absolute l_0 t_4 w_80 h_80 b_radius_5"><a href="blog-details.html"><img src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                        <h5 class="d_block fs_18 lh_24 mb_7"><a href="blog-details.html" class="d_iblock color_black">Baking can be done with a few things.</a></h5>
                                        <span class="post-date p_relative d_block fs_16 font_family_poppins">Oct 20, 2021</span>
                                    </div>
                                    <div class="post p_relative d_block pl_100 pb_20 mb_16">
                                        <figure class="post-thumb p_absolute l_0 t_4 w_80 h_80 b_radius_5"><a href="blog-details.html"><img src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                        <h5 class="d_block fs_18 lh_24 mb_7"><a href="blog-details.html" class="d_iblock color_black">Great food is not just eating energy.</a></h5>
                                        <span class="post-date p_relative d_block fs_16 font_family_poppins">Oct 20, 2021</span>
                                    </div>
                                    <div class="post p_relative d_block pl_100 pb_20">
                                        <figure class="post-thumb p_absolute l_0 t_4 w_80 h_80 b_radius_5"><a href="blog-details.html"><img src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                        <h5 class="d_block fs_18 lh_24 mb_7"><a href="blog-details.html" class="d_iblock color_black">The smell of good bread baking.</a></h5>
                                        <span class="post-date p_relative d_block fs_16 font_family_poppins">Oct 20, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget archives-widget p_relative d_block pt_35 pr_40 pb_20 pl_40 b_radius_10">
                                <div class="widget-title p_relative d_block mb_25">
                                    <h3 class="d_block fs_24 lh_30">Archives</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="archives-list clearfix">
                                        <li class="p_relative d_block mb_11"><a href="blog-details.html" class="p_relative d_iblock fs_16 font_family_poppins color_black">2016 Nevember (3)</a></li>
                                        <li class="p_relative d_block mb_11"><a href="blog-details.html" class="p_relative d_iblock fs_16 font_family_poppins color_black">2017 December (7)</a></li>
                                        <li class="p_relative d_block mb_11"><a href="blog-details.html" class="p_relative d_iblock fs_16 font_family_poppins color_black">2018 January (2)</a></li>
                                        <li class="p_relative d_block mb_11"><a href="blog-details.html" class="p_relative d_iblock fs_16 font_family_poppins color_black">2019 February (1)</a></li>
                                        <li class="p_relative d_block mb_11"><a href="blog-details.html" class="p_relative d_iblock fs_16 font_family_poppins color_black">Tecnology (3)</a></li>
                                        <li class="p_relative d_block"><a href="blog-details.html" class="p_relative d_iblock fs_16 font_family_poppins color_black">2020 March (3)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget tags-widget p_relative d_block pt_35 pr_40 pb_40 pl_40 b_radius_10">
                                <div class="widget-title p_relative d_block mb_35">
                                    <h3 class="d_block fs_24 lh_30">Tags</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="tags-list clearfix">
                                        <li class="p_relative d_iblock pull-left mr_5 ml_5 mb_10"><a href="blog-details.html" class="d_iblock fs_14 font_family_poppins color_black b_radius_5">Creative</a></li>
                                        <li class="p_relative d_iblock pull-left mr_5 ml_5 mb_10"><a href="blog-details.html" class="d_iblock fs_14 font_family_poppins color_black b_radius_5">Marketing</a></li>
                                        <li class="p_relative d_iblock pull-left mr_5 ml_5 mb_10"><a href="blog-details.html" class="d_iblock fs_14 font_family_poppins color_black b_radius_5">Idea</a></li>
                                        <li class="p_relative d_iblock pull-left mr_5 ml_5 mb_10"><a href="blog-details.html" class="d_iblock fs_14 font_family_poppins color_black b_radius_5">Consulting</a></li>
                                        <li class="p_relative d_iblock pull-left mr_5 ml_5 mb_10"><a href="blog-details.html" class="d_iblock fs_14 font_family_poppins color_black b_radius_5">Target</a></li>
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

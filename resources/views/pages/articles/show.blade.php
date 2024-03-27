<x-layout>
    <style>
        .ckeditor  p,
        .ckeditor  div,
        .ckeditor  blockquote{
            width: 100% !important;
        }
        blockquote{
            padding: 10px !important
        }
    </style>
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
    {{-- <section class="sidebar-page-container blog-standard-2 blog-details p_relative sec-pad">
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
                                    <img src="{{ asset('storage/'.$article->thumbnail) }}" alt="">
                                </figure>
                                <div class="ckeditor w-100" style="width: 100%">
                                    <p class="font_family_poppins w-100" style="width: 100%">{!! $article->content !!}</p>
                                </div>
                                <div class="text post-share-option clearfix p_relative d_block pt_35 pb_35 mb_70">
                                    <ul class="tags-list clearfix pull-left">
                                        <li class="p_relative pull-left mr_20">
                                            <h6 class="fs_16 fw_medium lh_40">Tags:</h6>
                                        </li>
                                        @foreach ($article->tags as $tag)
                                        <li class="p_relative pull-left mr_10">
                                            <a href="javascript:;" class="p_relative d_iblock fs_14 lh_20 font_family_poppins color_black b_radius_5">{{ $tag }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                        </div>
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
                                        <textarea name="comment" placeholder="Comment">{{ old('message') }}</textarea>
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
        </div>
        </div>
    </section> --}}
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
                                    <img src="{{ asset('storage/'.$article->thumbnail) }}" alt="{{ $article->title }}">
                                </figure>

                                <div class="text font_family_poppins mb_25 ckeditor clearfix">
                                        {!! $article->content !!}
                                </div>
                            </div>
                        </div>
                        @if($article->tags)
                        <div class="post-share-option clearfix p_relative d_block pt_35 pb_35 mb_70">
                            <ul class="tags-list clearfix pull-left">
                                <li class="p_relative pull-left mr_20">
                                    <h6 class="fs_16 fw_medium lh_40">Tags:</h6>
                                </li>
                                @foreach ($article->tags as $tag)
                                <li class="p_relative pull-left mr_10">
                                    <a href="javascript:;" class="p_relative d_iblock fs_14 lh_20 font_family_poppins color_black b_radius_5">{{ $tag }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

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
                                        <textarea name="comment" placeholder="Comment">{{ old('message') }}</textarea>
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
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->
</x-layout>

<script>
    tinymce.init({
        //... all other things
        "image_advtab": true
    })

</script>

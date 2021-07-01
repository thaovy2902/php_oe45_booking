@extends('layouts.app_body')	
@section('header')
@include('components.header_guess')
<!-- end:header-top -->
@include('components.header_search')
@endsection
@section('content')
<!-- Blog -->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
        @if ($review ?? '')
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                <div class="feature-img">
                    <img class="img-fluid" src="{{ asset('assets/images/destinations/h.jpg') }}" alt="">
                </div>
                <div class="blog_details">
                    <h2>{{ $review->title }}</h2>
                    <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class=""></i> Travel, Lifestyle</a></li>
                    </ul>
                    <p class="excert">
                        {{ $review->content1 }}
                    </p>
                    <p>
                        {{ $review->content1 }}
                    </p>
                    <div class="quote-wrapper">
                        <div class="quotes">
                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                        should have to spend money on boot camp when you can get the MCSE study materials yourself at
                        a fraction of the camp price. However, who has the willpower to actually sit through a
                        self-imposed MCSE training.
                        </div>
                    </div>
                    <p>
                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                        fraction of the camp price. However, who has the willpower
                    </p>
                    <p>
                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                        fraction of the camp price. However, who has the willpower to actually sit through a
                        self-imposed MCSE training. who has the willpower to actually
                    </p>
                </div>
            </div>
            <div class="navigation-top">
                <div class="d-sm-flex justify-content-between">
                    <p class="like-info">
                        <a href="">
                            <i class="icon-heart-outlined"></i>
                        </a> 
                        Lily and 4 people like this
                    </p>
                </div>
                <div class="navigation-area">
                    <div class="row">
                        <div
                        class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                        <div class="thumb">
                            <a href="#">
                            </a>
                        </div>
                        <div class="arrow">
                            <a href="#">
                                <span class="lnr text-white ti-arrow-left"></span>
                            </a>
                        </div>
                        </div>
                        <div
                        class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                        <div class="arrow">
                            <a href="#">
                                <span class="lnr text-white ti-arrow-right"></span>
                            </a>
                        </div>
                        <div class="thumb">
                            <a href="#">
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-author">
                <div class="media align-items-center">
                    <img src="{{ asset('assets/images/blog/author.png') }}" alt="">
                    <div class="media-body">
                        <h4>Harvard milan</h4>
                    </div>
                </div>
            </div>
            <div class="comments-area">
                <h4>05 {{ trans('messages.comments') }}</h4>
                <div class="comment-list">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/comment/comment_1.png')}}" alt="">
                        </div>
                        <div class="desc">
                            <p class="comment">
                                Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <h5>
                                    <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                </div>
                                <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">{{ trans('messages.reply') }}</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="comment-list">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/comment/comment_1.png')}}" alt="">
                        </div>
                        <div class="desc">
                            <p class="comment">
                                Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <h5>
                                    <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                </div>
                                <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">{{ trans('messages.reply') }}</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="comment-list">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/comment/comment_1.png')}}" alt="">
                        </div>
                        <div class="desc">
                            <p class="comment">
                                Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <h5>
                                    <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                </div>
                                <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">{{ trans('messages.reply') }}</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-form">
                <h4>{{ trans('messages.leave_reply') }}</h4>
                <form class="form-contact comment_form" action="#" id="commentForm">
                    <div class="row">
                        <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                placeholder="{{ trans('messages.write_cmt') }}"></textarea>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">{{ trans('messages.send_msg') }}</button>
                    </div>
                </form>
            </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">{{ trans('messages.category_blog') }}</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Resaurant food (41)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Travel news (12)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Modern technology (10)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Product (08)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Inspiration (11)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Health Care (19)</p>
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        @endif
        </div>
    </div>
</section>
@endsection

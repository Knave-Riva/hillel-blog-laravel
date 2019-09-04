@extends('layout')

@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="img/core-img/breadcrumb-line.png" alt="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog List</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Single</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        @yield('container')

                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area mt-0">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Categories</h6>
                            </div>
                            <ol class="foode-catagories">
                                <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> Drink</span> <span>(18)</span></a></li>
                                <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> Foody</span> <span>(28)</span></a></li>
                                <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> Tea</span> <span>(15)</span></a></li>
                                <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> Coffee</span> <span>(27)</span></a></li>
                            </ol>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Latest Posts</h6>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="img/blog-img/lp1.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Weeknight Ponzu Pasta</h6>
                                    </a>
                                    <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="img/blog-img/lp2.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>The Most Popular Recipe Last Month</h6>
                                    </a>
                                    <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="img/blog-img/lp3.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>A Really Good Chana Masala</h6>
                                    </a>
                                    <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="img/blog-img/lp4.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Spicy Instant Pot Taco Soup</h6>
                                    </a>
                                    <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="img/blog-img/lp5.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Lime Leaf Miso Soup</h6>
                                    </a>
                                    <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                </div>
                            </div>

                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Adds -->
                            <a href="#"><img src="img/blog-img/add.png" alt=""></a>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Archives</h6>
                            </div>
                            <ol class="foode-archives">
                                <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> January 2018</span></a></li>
                                <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> February 2018</span></a></li>
                                <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> March 2018</span></a></li>
                                <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> April 2018</span></a></li>
                                <li><a href="#"><span><i class="fa fa-stop" aria-hidden="true"></i> May 2018</span></a></li>
                            </ol>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>popular tags</h6>
                            </div>
                            <!-- Tags -->
                            <ol class="popular-tags d-flex flex-wrap">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Unique</a></li>
                                <li><a href="#">Template</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">travel</a></li>
                                <li><a href="#">lifestyle</a></li>
                                <li><a href="#">Wordpress Template</a></li>
                                <li><a href="#">food</a></li>
                                <li><a href="#">Idea</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->
@endsection

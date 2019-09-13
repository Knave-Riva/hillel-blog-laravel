@extends('BlogPost2colls')

@section('container')

    <!-- Blog Posts Area -->
    <div class="col-12 col-lg-8">
        <div class="blog-posts-area">

            <!-- Post Details Area -->
            <div class="single-post-details-area">
                <div class="post-thumbnail mb-30">
                    <img src="/img/blog-img/{{$post->preview_cover}}" alt="">
                </div>
                <div class="post-content">
                    <p class="post-date">{{$post->created_at->format('F d, Y')}} / {{$post->category->title}}</p>
                    <h4 class="post-title">{{$post->title}}</h4>
                    <div class="post-meta">
                        <a href="#"><span>by</span> {{$post->user->name}}</a>
                        <a href="#"><i class="fa fa-eye"></i> {{$post->views}}</a>
                        <a href="#"><i class="fa fa-comments"></i> 08</a>
                    </div>
                        {!! $post->body !!}
                </div>
            </div>

            <!-- Post Tags & Share -->
            <div class="post-tags-share d-flex justify-content-between align-items-center">
                <!-- Tags -->
                <ol class="popular-tags d-flex flex-wrap">
                    @foreach($post->tags as $tag)
                    <li><a href="#">{{$tag->name}}</a></li>
                    @endforeach
                </ol>
                <!-- Share -->
                <div class="post-share">
                    <span>Share:</span>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Related Post Area -->
            <div class="related-posts clearfix">
                <!-- Line -->
                <div class="curve-line bg-img mb-50" style="background-image: url(/img/core-img/breadcrumb-line.png);"></div>

                <!-- Headline -->
                <h4 class="headline">Relatest News</h4>

                <div class="row">

                    <!-- Single Blog Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post related-post">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <a href="#"><img src="/img/blog-img/13.jpg" alt=""></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content mb-50">
                                <p class="post-date">MAY 12, 2018 / drinks</p>
                                <a href="#" class="post-title">
                                    <h4>Grain-Free Sweet &amp; Savory Activate Walnut Granola</h4>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><span>by</span> Sarah Jenks</a>
                                    <a href="#"><i class="fa fa-eye"></i> 192</a>
                                    <a href="#"><i class="fa fa-comments"></i> 08</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post related-post">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <a href="#"><img src="/img/blog-img/14.jpg" alt=""></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content mb-50">
                                <p class="post-date">MAY 15, 2018 / Coffee</p>
                                <a href="#" class="post-title">
                                    <h4>Self-Care Interview Series: Gabrielle Russomagno</h4>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><span>by</span> Sarah Jenks</a>
                                    <a href="#"><i class="fa fa-eye"></i> 192</a>
                                    <a href="#"><i class="fa fa-comments"></i> 08</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Line -->
                <div class="curve-line bg-img" style="background-image: url(/img/core-img/breadcrumb-line.png);"></div>
            </div>

            <!-- Comment Area Start -->
            <div class="comment_area clearfix">
                <h4 class="headline">12 Comments</h4>

                <ol>
                    <!-- Single Comment Area -->
                    <li class="single_comment_area">
                        <div class="comment-wrapper d-flex">
                            <!-- Comment Meta -->
                            <div class="comment-author">
                                <img src="/img/blog-img/15.jpg" alt="">
                            </div>
                            <!-- Comment Content -->
                            <div class="comment-content">
                                <span class="comment-date">27 Aug 2018</span>
                                <h5>Brandon Kelley</h5>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                <a href="#">Like</a>
                                <a class="active" href="#">Reply</a>
                            </div>
                        </div>
                        <ol class="children">
                            <li class="single_comment_area">
                                <div class="comment-wrapper d-flex">
                                    <!-- Comment Meta -->
                                    <div class="comment-author">
                                        <img src="/img/blog-img/16.jpg" alt="">
                                    </div>
                                    <!-- Comment Content -->
                                    <div class="comment-content">
                                        <span class="comment-date">27 Aug 2018</span>
                                        <h5>John Doe</h5>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                        <a href="#">Like</a>
                                        <a class="active" href="#">Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </li>
                    <li class="single_comment_area">
                        <div class="comment-wrapper d-flex">
                            <!-- Comment Meta -->
                            <div class="comment-author">
                                <img src="/img/blog-img/17.jpg" alt="">
                            </div>
                            <!-- Comment Content -->
                            <div class="comment-content">
                                <span class="comment-date">27 Aug 2018</span>
                                <h5>Michen Jason</h5>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                <a href="#">Like</a>
                                <a class="active" href="#">Reply</a>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>

            <!-- Leave A Comment -->
            <div class="leave-comment-area clearfix">
                <div class="comment-form">
                    <h4 class="headline">Leave A Comment</h4>

                    <!-- Comment Form -->
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="contact-email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Comment"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn foode-btn">Post Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

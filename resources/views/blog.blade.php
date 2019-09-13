@extends('BlogPost2colls')

@section('container')
    <div class="blog-posts-area">

        <!-- Featured Post Area -->
        <div class="featured-posts">
            <a href="#"><img src="img/blog-img/1.jpg" alt=""></a>
            <!-- Featured Post Content -->
            <div class="featured-post-content">
                <p>MAY 8, 2018 / foody</p>
                <a href="#" class="post-title">
                    <h2>Quick Vegan Enchiladas with Sweet Potato Sauce</h2>
                </a>
            </div>
        </div>

        <!-- Single Blog Post -->
        @foreach($posts as $post)
        <div class="single-blog-post d-flex flex-wrap mt-50">
            <!-- Thumbnail -->
            <div class="post-thumbnail mb-50">
                <a href="#"><img src="img/blog-img/{{$post->preview_cover}}" alt=""></a>
            </div>
            <!-- Content -->
            <div class="post-content mb-50">
                <p class="post-date">{{$post->created_at->format('F d, Y')}} / {{$post->category->title}}</p>
                <a href="#" class="post-title">
                    <h4>{{$post->title}}</h4>
                </a>
                <div class="post-meta">
                    <a href="#"><span>by</span> {{$post->user->name}}</a>
                    <a href="#"><i class="fa fa-eye"></i> {{$post->views}}</a>
                    <a href="#"><i class="fa fa-comments"></i> 08</a>
                </div>
                <p class="post-excerpt">{{$post->description}}</p>
                <a href="#" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
            <!-- Post Curve Line -->
            <img class="post-curve-line" src="img/core-img/post-curve-line.png" alt="">
        </div>
        @endforeach

        <!-- Pager -->
        <ol class="foode-pager mt-50">
            <li><a href="{{$posts->previousPageUrl()}}"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Newer</a></li>
            <li><a href="{{$posts->nextPageUrl()}}">Older <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
        </ol>

    </div>
@endsection

@section('sidebar')
    <!-- ##### Single Widget Area ##### -->
    <div class="single-widget-area mt-0">
        <form class="search-form" action="#" method="post">
            <input type="search" name="search" class="form-control" placeholder="Search...">
            <button><i class="fa fa-send"></i></button>
        </form>
    </div>

    <!-- ##### Single Widget Area ##### -->
    <div class="single-widget-area">
        <!-- Title -->
        <div class="widget-title">
            <h6>About Me</h6>
        </div>
        <!-- Thumbnail -->
        <div class="about-thumbnail">
            <img src="img/blog-img/about-me.jpg" alt="">
        </div>
        <!-- Content -->
        <div class="widget-content text-center">
            <img src="img/core-img/signature.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
        </div>
    </div>

    @parent
@endsection

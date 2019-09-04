@extends('BlogPost2colls')

@section('container')

    <!-- Blog Posts Area -->
    <div class="col-12 col-lg-8">
        <div class="blog-posts-area">

            <!-- Post Details Area -->
            <div class="single-post-details-area">
                <div class="post-thumbnail mb-30">
                    <img src="img/blog-img/1.jpg" alt="">
                </div>
                <div class="post-content">
                    <p class="post-date">MAY 8, 2018 / foody</p>
                    <h4 class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</h4>
                    <div class="post-meta">
                        <a href="#"><span>by</span> Sarah Jenks</a>
                        <a href="#"><i class="fa fa-eye"></i> 192</a>
                        <a href="#"><i class="fa fa-comments"></i> 08</a>
                    </div>
                    <p>Ten years ago, laborers hammering away at Prague’s cobblestone streets would probably break for lunch with bag of fluffy rohliky bread rolls and some sliced ham, if they couldn’t make it to a pub for goulash and dumplings. Flash-forward to 2018 and the same stonemasons — as well as local shopkeepers, students and chief executives — are likely to prefer bun bo nam bo or pho soup for lunch at one of the city’s fast and cheap Vietnamese noodle restaurants, which have appeared by the dozens in the Czech capital over the past decade.</p>
                    <p>What hadn’t shown up, however, was the idea that Vietnamese cuisine can be taken seriously, with complex techniques and in a fancier setting. That changed with last December’s opening of Taro, a surprisingly chic bistro in the forever up-and-coming Smichov neighborhood southwest of Old Town. Run by two brothers, Khanh and Giang Ta, Taro has no evening à la carte menu (there is one at lunch), instead offering just two options for dinner: a four-course tasting menu at 890 koruna (about $40) or a seven-course menu at 1,290 koruna per person, not including drinks. Cheap noodles this ain’t.</p>
                    <blockquote>
                        <div class="blockquote-icon">
                            <img src="img/core-img/quote.png" alt="">
                        </div>
                        <div class="blockquote-text">
                            <h6>That’s not to say you’ll have the exact same thing if you stop by: the restaurant’s menus change constantly, based on seasonal ingredients.</h6>
                            <h6>Ollie Schneider</h6>
                        </div>
                    </blockquote>
                    <h4>You have 4 free articles remaining.</h4>
                    <p>A deconstructed gyoza started things off on my visit, topping a crisp won ton cracker with sweet and spicy candied ginger, a tender bite of smoky Peking duck and an aromatic cucumber gel for a crunchy and fragrant amuse bouche. Seven equally creative courses followed, often balancing sweet notes with bracing acidity.</p>
                    <p>A sweet-and-sour sea bass tartare, decorated with apple chips, mango chunks and creamy avocado purée, tasted more like a ceviche, while a green mango salad bathed in crisp passion fruit dressing contrasted tropical fruit flavors with juicy chunks of slow-cooked beef tenderloin.</p>
                </div>
            </div>

            <!-- Post Tags & Share -->
            <div class="post-tags-share d-flex justify-content-between align-items-center">
                <!-- Tags -->
                <ol class="popular-tags d-flex flex-wrap">
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Unique</a></li>
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
                <div class="curve-line bg-img mb-50" style="background-image: url(img/core-img/breadcrumb-line.png);"></div>

                <!-- Headline -->
                <h4 class="headline">Relatest News</h4>

                <div class="row">

                    <!-- Single Blog Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post related-post">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <a href="#"><img src="img/blog-img/13.jpg" alt=""></a>
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
                                <a href="#"><img src="img/blog-img/14.jpg" alt=""></a>
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
                <div class="curve-line bg-img" style="background-image: url(img/core-img/breadcrumb-line.png);"></div>
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
                                <img src="img/blog-img/15.jpg" alt="">
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
                                        <img src="img/blog-img/16.jpg" alt="">
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
                                <img src="img/blog-img/17.jpg" alt="">
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

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
                            <li class="breadcrumb-item active" aria-current="page">Typography</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <div class="typography-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="section-heading">
                        <h2>Typography</h2>
                        <p>Type face, Size, Images and Form</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">

                    <!-- Type Face -->
                    <div class="type-face">
                        <h1>Heading 1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                        <h2>Heading 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                        <h3>Heading 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                        <h4>Heading 4</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                        <h5>Heading 5</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                        <h6>Heading 6</h6>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                        <!-- Line -->
                        <img class="pt-5" src="img/core-img/breadcrumb-line.png" alt="">
                    </div>

                    <!-- Images -->
                    <div class="foode-image">
                        <h4 class="mb-30">Images</h4>

                        <img class="mb-30" src="img/blog-img/1.jpg" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img class="mb-30" src="img/blog-img/19.jpg" alt="">
                            </div>
                            <div class="col-12 col-md-6">
                                <img class="mb-30" src="img/blog-img/20.jpg" alt="">
                            </div>
                        </div>
                        <p class="mb-0">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conse magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <!-- Line -->
                        <img class="pt-5" src="img/core-img/breadcrumb-line.png" alt="">
                    </div>

                    <!-- List -->
                    <div class="foode-list-area">
                        <h4 class="mb-30">List</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul class="foode-list">
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Quisque bibendum justo aliquet, aliquam mauris condimentum.</li>
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Sed malesuada neque tempus, euismod magna ut.</li>
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Vivamus lacinia nibh ac lorem mattis.</li>
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Phasellus malesuada dolor eget velit cursus.</li>
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Donec finibus ipsum a turpis volutpat, et tempor enim varius.</li>
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Maecenas laoreet nunc sed odio placerat.</li>
                        </ul>
                        <!-- Line -->
                        <img class="pt-5" src="img/core-img/breadcrumb-line.png" alt="">
                    </div>

                    <!-- Blockquote -->
                    <div class="foode-blockquote">
                        <h4 class="mb-30">Blockquote</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <blockquote>
                            <div class="blockquote-icon">
                                <img src="img/core-img/quote.png" alt="">
                            </div>
                            <div class="blockquote-text">
                                <h6>That’s not to say you’ll have the exact same thing if you stop by: the restaurant’s menus change constantly, based on seasonal ingredients.</h6>
                                <h6>Ollie Schneider</h6>
                            </div>
                        </blockquote>
                        <p>What hadn’t shown up, however, was the idea that Vietnamese cuisine can be taken seriously, with complex techniques and in a fancier setting.</p>
                        <!-- Line -->
                        <img class="pt-5" src="img/core-img/breadcrumb-line.png" alt="">
                    </div>

                    <!-- Form & Button -->
                    <div class="form-button">
                        <h4 class="mb-30">Form &amp; Button</h4>

                        <!-- Contact Form Area -->
                        <div class="contact-form-area mb-50">
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
                                            <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Buttons -->
                        <a href="#" class="btn foode-btn m-2">Post Comment</a>
                        <a href="#" class="btn foode-btn active m-2">Post Comment</a>

                        <div class="d-block mb-30"></div>

                        <a href="#" class="btn foode-btn btn-sm">Like</a>
                        <a href="#" class="btn foode-btn btn-sm active">Reply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

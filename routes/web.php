<?php



Route::get('/', function () {
    return view('index');
})->name('blog-index');

Route::get('/about-us', function () {
    return view('about_us');
})->name('blog-about');

Route::get('/contacts', function () {
    return view('contact');
})->name('blog-contact');

Route::get('/blog', function () {
    return view('blog');
})->name('blog-blog');

Route::get('/posts', function () {
    return view('post');
})->name('blog-post');


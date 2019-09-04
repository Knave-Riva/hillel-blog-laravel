<?php



Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/contacts', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/posts', function () {
    return view('post');
});

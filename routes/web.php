<?php



Route::get('/', function () {
    $posts = \App\Post::latest()->paginate(8);

    return view('index', ['posts' => $posts]);
})->name('blog-index');

Route::get('/about-us', function () {
    return view('about_us');
})->name('blog-about');

Route::get('/contacts', function () {
    return view('contact');
})->name('blog-contact');

Route::get('/blog', function () {
    $posts = \App\Post::latest()->paginate(6);

    return view('blog', ['posts' => $posts]);
})->name('blog-blog');

Route::get('/posts', function () {
    return view('post');
})->name('blog-post');


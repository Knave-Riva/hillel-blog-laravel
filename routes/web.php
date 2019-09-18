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

Route::get('/blog/category/{slug}', function ($slug) {
    $posts = \App\Category::where('slug', '=', $slug)->first()->posts()->latest()->paginate(6);

    return view('blog', ['posts' => $posts]);
})->name('blog.blog-by-category');

Route::get('/posts/{post}', function (\App\Post $post) {
    $post->increment('views');
    return view('post', ['post' => $post]);
})->name('blog-post');

Route::get('blog/tag/{slug}', function ($slug) {
    $posts = \App\Tag::where('slug', '=', $slug)->first()->posts()->latest()->paginate(6);

    return view('blog', ['posts' => $posts]);
})->name('blog.blog-tag');

Route::get('blog/author/{user}', function (\App\User $user) {
    $posts = $user->posts()->latest()->paginate(5);

    return view('blog', ['posts' => $posts]);
})->name('blog.blog-author');







//get('blog/tag/{tag}', function (\App\Tag $tag)
//dd($tag);
//$posts= $tag->posts()->latest()->paginate(5);
//dd($slug);

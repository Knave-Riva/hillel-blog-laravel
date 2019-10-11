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

Route::get('/categories', 'CategoriesController@index')->name('categories.index');
Route::get('/categories/create', 'CategoriesController@create')->name('categories.create');
Route::post('/categories', 'CategoriesController@store')->name('categories.store');
Route::get('/categories/{category}', 'CategoriesController@show')->name('categories.show');
Route::get('/categories/{category}/edit', 'CategoriesController@edit')->name('categories.edit');
Route::put('/categories/{category}', 'CategoriesController@update')->name('categories.update');
Route::delete('/categories/{category}', 'CategoriesController@destroy')->name('categories.destroy');


Route::get('/tags', 'TagsController@index')->name('tags.index');
Route::get('/tags/create', 'TagsController@create')->name('tags.create');
Route::post('/tags', 'TagsController@store')->name('tags.store');
Route::get('/tags/{tag}', 'TagsController@show')->name('tags.show');
Route::get('/tags/{tag}/edit', 'TagsController@edit')->name('tags.edit');
Route::put('/tags/{tag}', 'TagsController@update')->name('tags.update');
Route::delete('/tags/{tag}', 'TagsController@destroy')->name('tags.destroy');


Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::get('/postsblog/create', 'PostsController@create')->name('posts.create');
Route::post('/posts', 'PostsController@store')->name('posts.store');
Route::get('/posts/{post}', 'PostsController@show')->name('posts.show');
Route::get('/posts/{post}/edit', 'PostsController@edit')->name('posts.edit');
Route::put('/posts/{post}', 'PostsController@update')->name('posts.update');
Route::delete('/posts/{post}', 'PostsController@destroy')->name('posts.destroy');

Route::get('/logins', 'LoginsController@index')->name('logins.index');
Route::post('/logins', 'LoginsController@auth')->name('logins.auth');
Route::get('/logins/member', 'LoginsController@member')->middleware('auth')->name('logins.member');
Route::get('/logins/logout', 'LoginsController@logout')->name('logins.logout');


//Route::get('/admin/login',function (){
//   return view('admin.login');
//});
//
//Route::post('/admin/login', function (Illuminate\Http\Request $request ){
//
//    $validatedEmail = $request->validate([
//        'email' => 'required|email|exists:users,email',
//        'password' => 'required|min:6|max:25|alpha_dash',
//    ]);
//
//    $email = $validatedEmail['email'];
//    $password = $validatedEmail['password'];
//    $credentials = [
//        'email' => $email,
//        'password' => $password
//    ];
//
//    if (Illuminate\Support\Facades\Auth::attempt($credentials)){
//        //dd($credentials);
//        return  redirect()->route('admin.login.member');
//    };
//})->name ('admin.login.auth');
//
//Route::get('/admin/member',function (){
//    $user = Illuminate\Support\Facades\Auth::user();
//
//    dd($user);
//})->name('admin.login.member');

//get('blog/tag/{tag}', function (\App\Tag $tag)
//dd($tag);
//$posts= $tag->posts()->latest()->paginate(5);
//dd($slug);

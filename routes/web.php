<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

//get all Data from DB ------------------
// $posts = \App\Post::get();
// get some posts from DB ----------------------
// $post_by_id = \App\Post::find(1);
$few_posts = \App\Post::take(3)->get();

// dd($posts[0]->title);
// dd($posts[1]->body);

$data = [
    'myposts' => $few_posts
];

    return view('pages.home', $data);
});




Route::get('/products', function () {

    $posts = \App\Post::get();
    // $first = $posts->pull(0);

    $data = [
    'posts' => $posts,
    // 'mainpost' => $first,
    ];



    return view('pages.products',$data);
});


Route::get('/about-us', function () {

    return view('pages.aboutus');
});




Route::get('/products/{id}', function ($id) {

// dd($id);

$one_post = \App\Post::find($id);

$data = [

'my_one_post' => $one_post,
'title' => 'All Blogs',
];

    return view('pages.products-single', $data);
});






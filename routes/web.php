<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\User;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {


// Route::get('/', function () {
//     return view('front.index');
// });
Route::get('/',[App\Http\Controllers\FrontController::class,'index'])
->name('front.index');



Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/category', function () {
    return view('front.categorypost');
});


Route::get('/category/{id}/posts',[App\Http\Controllers\CategoryPostController::class,'DisplayPosts'])
->name('categorypost.show');

Route::get('/post/{id}',[App\Http\Controllers\CategoryPostController::class,'Post'])
->name('post.show');


Route::post('/contact/{id}',[App\Http\Controllers\FeedbackController::class,'contact']);


Route::get('/admin/feedback',[App\Http\Controllers\FeedbackController::class,'feedback'])
->name('feedback.index')->middleware("auth");


Route::get('/search',[App\Http\Controllers\SearchController::class,'search']);




Route::resource("users", Controllers\UsersController::class);
//Route::resource("admin/categories",Controllers\CategoriesController::class);

Route::get('/admin/categories',[App\Http\Controllers\CategoriesController::class,'index'])
->name('categories.index');

Route::get('/admin/categories/create',[App\Http\Controllers\CategoriesController::class,'create'])
->name('categories.create');

Route::post('/admin/categories/create',[App\Http\Controllers\CategoriesController::class,'store'])
->name('categories.store');

Route::get('/admin/categories/show/{category}',[App\Http\Controllers\CategoriesController::class,'show'])
->name('categories.show');

Route::get('/admin/categories/{category}',[App\Http\Controllers\CategoriesController::class,'edit'])
->name('categories.edit');

Route::post('/admin/categories/{category}',[App\Http\Controllers\CategoriesController::class,'update'])
->name('categories.update');

Route::delete('/admin/categories/{category}',[App\Http\Controllers\CategoriesController::class,'destroy'])
->name('categories.destroy');





Route::get('/admin/posts',[App\Http\Controllers\PostsController::class,'index'])
->name('posts.index');

Route::get('/admin/posts/create',[App\Http\Controllers\PostsController::class,'create'])
->name('posts.create');

Route::post('/admin/posts/create',[App\Http\Controllers\PostsController::class,'store'])
->name('posts.store');

Route::post('/admin/posts/create',[App\Http\Controllers\PostsController::class,'store'])
->name('posts.store');

Route::get('/admin/posts/show/{post}',[App\Http\Controllers\PostsController::class,'show'])
->name('posts.show');

Route::get('/admin/posts/{post}',[App\Http\Controllers\PostsController::class,'edit'])
->name('posts.edit');

Route::post('/admin/posts/{post}',[App\Http\Controllers\PostsController::class,'update'])
->name('posts.update');

Route::delete('/admin/posts/{post}',[App\Http\Controllers\PostsController::class,'destroy'])
->name('posts.destroy');



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('front.index');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
});
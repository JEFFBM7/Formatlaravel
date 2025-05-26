<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\BlogController;
use Illuminate\Pagination\Paginator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-tailwind', function () {
    return view('test-tailwind');
});

Route::prefix("/blog")->controller(BlogController::class)->name("blog.")->group(function(){

    Route::get('/', 'indexBlog')->name('indexBlog');

    Route::get('/{slug}/{id}', 'showBlog')->name('show')->where([
        'id' => '[0-9]+',
        'slug' => '[0-9a-z\-]+'
    ])->name('showBlog');
    Paginator::useBootstrap(); // Use Bootstrap for pagination styling 
});

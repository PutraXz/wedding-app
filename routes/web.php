<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
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

Route::post('/store', function (Request $request){
    $post = new Post;
    $post->title = $request->title;
    $post->name_url = Str::slug($post->title, '-');
    $post->name_groom =  $request->name_groom;
    $post->name_bride =  $request->name_bride;
    $post->child_groom =  $request->child_groom;
    $post->father_groom =  $request->father_groom;
    $post->mother_groom =  $request->mother_groom;
    $post->child_bride =  $request->child_bride;
    $post->father_bride	 =  $request->father_bride	;
    $post->mother_bride =  $request->mother_bride;
    $post->save();

    return back();
});
Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts', ['posts' => $posts]);
})->name('posts');

Route::get('/wedding/{post}', function (Post $post) {
    return view('show', ['post' => $post]);
})->name('show');

Route::get('/multipleuploads', 'App\Http\Controllers\MultipleuploadsController@index')->name('uploads');
Route::post('/save','App\Http\Controllers\MultipleuploadsController@store')->name('uploads.store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wedding', function () {
    return view('wedding');
});

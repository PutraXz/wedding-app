<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Multipleuploads;
use App\Models\Greeting;
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
    $post->father_bride	 =  $request->father_bride;
    $post->mother_bride =  $request->mother_bride;
        $files= [];
        $file = $request->file('image');
        $filename=  round(microtime(true) * 1000).'-'.str_replace(' ','-',$file->getClientOriginalName());
        $file->move(public_path('images/data-images'), $filename);
        $data['image']= $filename;
    $post->image = $filename;

        $delimiters1 = ['-', 'T'];
        $postt = $request->date_count;
        $new = str_replace($delimiters1, $delimiters1[0], $postt);
        $arr1 = explode($delimiters1[0], $new);

        $arr = explode($delimiters1[0], $new);
        $dateObj   = DateTime::createFromFormat('!m', $arr[1]);
        $monthName = $dateObj->format('F');

        $month=  $arr[0]." ";
        $year =$monthName." ";
        $day =$arr[2]." ";
        $time =$arr[3].":00";
        $send = $day.$year.$month.$time;

    $post->date_count = strval($send);
    $post->save();

    return back();
});
Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts', ['posts' => $posts]);
})->name('posts');

Route::get('/wedding/{post}', function (Post $post) {
    $greetings = Greeting::where('name_url', $post->name_url)->get();
    $multiuploads = Multipleuploads::where('name_url', $post->name_url)->get();
    return view('show', ['post' => $post, 'multiuploads' =>$multiuploads, 'greetings'=>$greetings]);
})->name('show');

Route::get('/multipleuploads', 'App\Http\Controllers\MultipleuploadsController@index')->name('uploads');
Route::post('/save','App\Http\Controllers\MultipleuploadsController@store')->name('uploads.store');
Route::get('/greetings','App\Http\Controllers\GreetingController@create')->name('greets');
Route::post('/greeting', 'App\Http\Controllers\GreetingController@store')->name('greets.store');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/wedding', function () {
    return view('wedding');
});
Route::group(['middleware' => 'cors'], function() {
    Route::post('/api/your_url', function () {
        return ['status'=>'success'];
     });
 });

 Route::group(['middleware' => 'cors'], function() {
    Route::post('/api/your_url','YourController@function' );

 });

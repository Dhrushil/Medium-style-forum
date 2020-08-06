<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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

Route::get('/articles/create', 'ArticleController@create')->name('articles.create');
Route::post('/articles', 'ArticleController@store')->name('articles.store');
Route::get('/articles', 'ArticleController@index')->name('articles.index');
Route::get('/articles/{param}', 'ArticleController@show')->name('articles.show');


Route::get('/', function () {
    $links = \App\Link::paginate(2);
   
    return view('welcome', ['links' => $links]);
});


Route::get('/submit', function() {
    return view('submit');
});



Route::post('/submit', function(Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|max:255',
        'description' => 'required|max:255',
    ]);

    $id = $request->validate([
        'url' => 'required|max:255'
    ]);

    $id = tap(new App\Link($id))->save();
    $link = tap(new App\Link($data))->save();

    return redirect('/submit{id}');
});


Route::get('check', function() {
    return action([HomeController::class, 'index']);
});


Auth::routes();

Route::get('/home-page', 'HomeController@index')->name('home');
Route::get('/learn', 'LearnController@index')->name('learn');
Route::get('/learn/{$id}', 'LearnController@index')->name('learn.setup');

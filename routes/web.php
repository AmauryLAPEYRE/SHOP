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



Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => ['web', 'auth']], function() {

    Route::get('/', function () {
        return redirect('/home');
    });

    Route::get('/home', 'ViewController@index');

    Route::group(['middleware' => ['Admin']], function() {
        Route::get('/users', 'ViewController@users');
        Route::get('/adduser', 'ViewController@adduser');
        Route::post('/delete', 'UserController@deleteOne');
    });

    Route::get('/books', 'ViewController@allBooks');
    Route::get('/games', 'ViewController@allGames');
    Route::get('/add-book', 'ViewController@addBook');
    Route::get('/add-game', 'ViewController@addGame');
    Route::get('/update-game', 'ViewController@updateGame');
    Route::get('/update-book', 'ViewController@updateBook');
    Route::get('/authors', 'ViewController@allAuthors');
    Route::get('/genres', 'ViewController@allGenres');
    Route::get('/categories', 'ViewController@allCategories');

    Route::post('/addbook', 'BookController@addOne');
    Route::post('/delete-book', 'BookController@deleteOne');
    Route::post('/updatebook', 'BookController@updateOne');
    Route::post('/update-book-stock', 'BookController@updateStock');

    Route::post('/addgame', 'GameController@addOne');
    Route::post('/delete-game', 'GameController@deleteOne');
    Route::post('/updategame', 'GameController@updateOne');
    Route::post('/update-game-stock', 'GameController@updateStock');

    Route::post('/addauthor', 'AuthorController@addOne');
    Route::post('/delete-author', 'AuthorController@deleteOne');

    Route::post('/addgenre', 'GenreController@addOne');
    Route::post('/delete-genre', 'GenreController@deleteOne');

    Route::post('/addcategory', 'CategoryController@addOne');
    Route::post('/delete-category', 'CategoryController@deleteOne');

});

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book as Book;
use \App\Game as Game;
use \App\Author as Author;
use \App\Genre as Genre;
use \App\Category as Category;
use \Auth;

class ViewController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
    public function users()
    {
        $users = \App\User::all();
        return view('admin.users', ['users' => $users]);
    }
    public function addUser()
    {
        return view('admin.adduser');
    }
    public function allBooks()
    {
        $books = Book::all();
        return view('products.books.books', ['books' => $books]);
    }
    public function allGames()
    {
        $games = Game::all();
        return view('products.games.games', ['games' => $games]);
    }
    public function addBook()
    {
        $authors = Author::all();
        $genres = Genre::all();
        return view('products.books.create', [
            'authors' => $authors,
            'genres' => $genres,
        ]);
    }
    public function addGame()
    {
        $categories = Category::all();
        return view('products.games.create', ['categories' => $categories]);
    }
    public function allGenres()
    {
        $genres = Genre::all();
        return view('products.books.genres', ['genres' => $genres]);
    }
    public function allAuthors()
    {
        $authors = Author::all();
        return view('products.books.authors', ['authors' => $authors]);
    }
    public function allCategories()
    {
        $categories = Category::all();
        return view('products.games.categories', ['categories' => $categories]);
    }
    public function updateBook(Request $request)
    {
        $authors = Author::all();
        $genres = Genre::all();
        $books = Book::find($request->input('id'));
        return view('products.books.update', [
            'books' => $books,
            'authors' => $authors,
            'genres' => $genres,
        ]);
    }
    public function updateGame(Request $request)
    {
        $games = Game::find($request->input('id'));
        $categories = Category::all();
        return view('products.games.update', [
            'games' => $games,
            'categories' => $categories,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use App\Models\Bookmark;

class HomeController extends Controller
{
    public function home() {

        $books = Book::all();

        $popularBooksISBN = Bookmark::select('isbn', DB::raw('COUNT(isbn) as occurrences'))
            ->groupBy('isbn')
            ->orderBy('occurrences', 'DESC')
            ->limit(10)
            ->get();

        $popularBooks = collect();
        foreach($popularBooksISBN as $popularBookISBN) {

            $popularBooks->push(Book::find($popularBookISBN->isbn));
        }

        return view('home.home', ['books' => $books, 'popularBooks' => $popularBooks]);
    }

    public function explore() {

        return view('home.explore');
    }

    public function landing() {

        return view('home.landing');
    }

    public function admin() {

        if(Auth::user()->hasRole('Admin')) {
           return view('admin.home'); 
        }

        else return redirect('/home');
    }
}

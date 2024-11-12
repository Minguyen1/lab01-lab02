<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $highestPriceBooks = DB::table('books')
        ->join('categories', 'books.category_id', '=', 'categories.id')
        ->select('books.*', 'categories.name as category_name')
        ->orderBy('price', 'desc')
        ->take(8)
        ->get();

        $lowestPriceBooks = DB::table('books')
        ->join('categories', 'books.category_id', '=', 'categories.id')
        ->select('books.*', 'categories.name as category_name')
        ->orderBy('price', 'asc')
        ->take(8)
        ->get();

        $books = DB::table('categories')->get();

        return view('index', compact('highestPriceBooks', 'lowestPriceBooks', 'books'));
    }
}

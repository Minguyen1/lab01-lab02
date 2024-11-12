<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    // public function index(){
    //     $highestPriceBooks = DB::table('books')
    //     ->orderBy('price', 'desc')
    //     ->take(8)
    //     ->get();

    //     $lowestPriceBooks = DB::table('books')
    //     ->orderBy('price', 'asc')
    //     ->take(8)
    //     ->get();

    //     return view('home', compact('highestPriceBooks', 'lowestPriceBooks'));
    // }

    public function showByCategory($id){
        $books = DB::table('books')
        ->join('categories', 'books.category_id', '=', 'categories.id')
        ->select('books.*', 'categories.name as category_name')
        ->where('category_id', $id)
        ->latest('id')
        ->paginate(8);

        return view('show', compact('books'));
    }

    public function showBooks($id){
        $books = DB::table('books')->find($id);

        if($books == null){
            return redirect(404);
        }

        return view('detail', compact('books'));
    }
}

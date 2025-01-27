<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories = DB::table('books')
            ->select('category')
            ->distinct()
            ->get();

        return view('HOMElandingpage_customer', ['categories' => $categories]);
    }

    public function getBooksByCategory($category)
    {
        $books = DB::table('books')
            ->where('category', $category)
            ->get();

        return view('Hspecific_category', ['books' => $books, 'category' => $category]);
    }

    public function getBookById($id)
    {
        $book = DB::table('books')
            ->where('id', $id)
            ->first();

        return view('Hbookdetailswithreserve', ['book' => $book]);
    }

    public function getBookReserveById($id)
    {
        $userId = session('user_id');

        $book = DB::table('books')
            ->where('id', $id)
            ->first();

        $user = DB::table('users')
            ->where('id', $userId)
            ->first();

        return view('Hreservationdetails', ['book' => $book, 'user' => $user]);
    }
}

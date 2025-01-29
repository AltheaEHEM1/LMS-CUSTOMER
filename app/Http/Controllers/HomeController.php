<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Book;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('HOMElandingpage_customer', ['categories' => $categories]);
    }

    public function getBooksByCategory($category)
    {
        $categoryId = Category::with('books')->find($category);

        if (!$categoryId) {
            return redirect()->back()->with('error', 'Category not found');
        }

        return view('Hspecific_category', compact('categoryId'));

    }

    public function getBookById($id, $categoryId)
    {   

        $book = Book::find($id);

        if (!$book) {
            return redirect()->back()->with('error', 'Book not found or available');
        }

        $category = Category::find($categoryId);

        return view('Hbookdetailswithreserve', compact('book', 'category'));
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

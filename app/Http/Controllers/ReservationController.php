<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function index()
    {
        $userId = session('user_id');

        $reservations = DB::table('borrows')
            ->join('books', 'borrows.book_id', '=', 'books.id')
            ->where('user_id', $userId)
            ->select('*', 'borrows.status as borrow_status')
            ->get();

        return view('/RESERVATIONreservation-page1', ['reservations' => $reservations]);
    }

    public function reserveBook(Request $request)
    {
        $request->validate([
            'reservation_date' => 'required|date',
        ]);

        $userId = session('user_id');

        $borrow = DB::table('borrows')->insertGetId([
            'user_id' => $userId,
            'book_id' => $request->book_id,
            'reservation_date' => $request->reservation_date,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($borrow) {
            return response()->json([
                'success' => true,
                'message' => 'Book reserved successfully!',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to reserve the book.',
            ]);
        }
    }
}

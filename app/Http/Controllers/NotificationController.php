<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NotificationController extends Controller
{
    public function check_notif()
    {
        $currentDate = Carbon::now()->toDateString();
        $userId = session('user_id');

        $borrows = DB::table('borrows')
            ->join('books', 'borrows.book_id', '=', 'books.id')
            ->where('due_date', $currentDate)
            ->whereNotExists(function ($query) {
                $query->select(DB::raw(1))
                    ->from('notifications')
                    ->whereRaw('notifications.reservation_id = borrows.id');
            })
            ->get();

        foreach ($borrows as $borrow) {
            DB::table('notifications')->insert([
                'message' => "The book '{$borrow->title}' is due for return today.",
                'receiver' => $borrow->user_id, 
                'reservation_id' => $borrow->id, 
                'is_read' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $unreadCount = DB::table('notifications')
            ->where('receiver', $userId) 
            ->where('is_read', false)
            ->count();

        return response()->json([
            'success' => true,
            'unread_count' => $unreadCount,
        ]);
    }

    public function get_notif()
    {
        $notifications = DB::table('notifications')
            ->where('receiver', auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'success' => true,
            'notifications' => $notifications,
        ]);
    }

    public function read_notif()
    {
        $userId = session('user_id');

        DB::table('notifications')
            ->where('receiver', $userId)
            ->where('is_read', false)
            ->update(['is_read' => true]);

        return response()->json([
            'success' => true,
        ]);
    }
}

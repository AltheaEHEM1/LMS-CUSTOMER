<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookmarkController extends Controller
{
    public function index()
    {
        $userId = session('user_id');

        $bookmarks = DB::table('bookmarks')
            ->join('books', 'bookmarks.book_id', '=', 'books.id')
            ->where('user_id', $userId)
            ->select('*', 'bookmarks.id as bookmark_id')
            ->get();

        return view('SHELFpage', ['bookmarks' => $bookmarks]);
    }

    public function bookmarkBook(Request $request)
    {
        $userId = session('user_id');
        $bookId = $request->book_id;

        $existingBookmark = DB::table('bookmarks')
            ->where('user_id', $userId)
            ->where('book_id', $bookId)
            ->first();

        if ($existingBookmark) {
            return response()->json([
                'success' => false,
                'message' => 'Book is already bookmarked.',
            ]);
        }

        $bookmark = DB::table('bookmarks')->insertGetId([
            'user_id' => $userId,
            'book_id' => $bookId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($bookmark) {
            return response()->json([
                'success' => true,
                'message' => 'Book bookmarked successfully!',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to bookmark the book.',
            ]);
        }
    }

    public function unbookmarkBook(Request $request)
    {
        $bookmarkIds = $request->bookmark_ids;

        if (empty($bookmarkIds)) {
            return response()->json([
                'success' => false,
                'message' => 'No bookmarks selected for deletion.',
            ]);
        }

        $deleted = DB::table('bookmarks')
            ->whereIn('id', $bookmarkIds)
            ->delete();

        if ($deleted) {
            return response()->json([
                'success' => true,
                'message' => 'Bookmarks deleted successfully!',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete bookmarks.',
            ]);
        }
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Services\BookService;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function mostReading()
    {
        $books = $this->bookService->getMostReadingsBooks();
        return response()->json(['message' => 'Most Readings Books Index', 'books' => $books], 200);
    }
}

<?php

namespace App\Services;

use App\Models\Book;

class BookService
{
    public function getMostReadingsBooks(){
        $books = Book::orderByDesc('num_of_read_pages')->limit(3)->get();
        return $books;
    }
}

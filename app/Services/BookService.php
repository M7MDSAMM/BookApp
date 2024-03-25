<?php

namespace App\Services;

use App\Models\Book;

class BookService
{
    public function getMostReadingsBooks(){
        $books = Book::orderByDesc('num_of_read_pages')->limit(3)->get();
        return $books;
    }

    public function update($bookReadingInterval){
        $newReadings = $bookReadingInterval->end_page - $bookReadingInterval->start_page;
        $book = Book::findOrFail($bookReadingInterval->book_id);
        $book->num_of_read_pages = $book->num_of_read_pages + $newReadings;
        $book->save();
    }
}

<?php

namespace App\Observers;

use App\Models\Book;
use App\Models\BookReadingInterval;

class IntervalObserver
{
    /**
     * Handle the BookReadingInterval "created" event.
     */
    public function created(BookReadingInterval $bookReadingInterval): void
    {
        //
        $newReadings = $bookReadingInterval->end_page - $bookReadingInterval->start_page;
        $book = Book::findOrFail($bookReadingInterval->book_id);
        $book->num_of_read_pages = $book->num_of_read_pages + $newReadings;
        $book->save();
    }

    /**
     * Handle the BookReadingInterval "updated" event.
     */
    public function updated(BookReadingInterval $bookReadingInterval): void
    {
        //
    }

    /**
     * Handle the BookReadingInterval "deleted" event.
     */
    public function deleted(BookReadingInterval $bookReadingInterval): void
    {
        //
    }

    /**
     * Handle the BookReadingInterval "restored" event.
     */
    public function restored(BookReadingInterval $bookReadingInterval): void
    {
        //
    }

    /**
     * Handle the BookReadingInterval "force deleted" event.
     */
    public function forceDeleted(BookReadingInterval $bookReadingInterval): void
    {
        //
    }
}

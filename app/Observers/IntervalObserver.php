<?php

namespace App\Observers;

use App\Models\Book;
use App\Models\BookReadingInterval;
use App\Services\BookService;

class IntervalObserver
{
    protected $bookService;
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }
    /**
     * Handle the BookReadingInterval "created" event.
     */
    public function created(BookReadingInterval $bookReadingInterval): void
    {
        //
        $this->bookService->update($bookReadingInterval);
        
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

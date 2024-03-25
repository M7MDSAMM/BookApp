<?php

namespace App\Services;

use App\Models\BookReadingInterval;

class BookReadingIntervalService
{
    public function store($data)
    {
        $bookReadingInterval = new BookReadingInterval($data);
        $isSaved = $bookReadingInterval->save();

        if ($isSaved) {
            return $bookReadingInterval;
        } else {
            return false;
        }
    }
}

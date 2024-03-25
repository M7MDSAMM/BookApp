<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIntervalRequest;
use App\Services\BookReadingIntervalService;
use Illuminate\Http\Request;

class BookReadingInterval extends Controller
{
    protected $bookReadingIntervalService;

    public function __construct(BookReadingIntervalService $bookReadingIntervalService)
    {
        $this->bookReadingIntervalService = $bookReadingIntervalService;
    }

    public function store(StoreIntervalRequest $request)
    {
        $interval = $this->bookReadingIntervalService->store($request->validated());
        if ($interval) {
            return response()->json(['message' => 'Book Reading Interval saved successfully', 'book' => $interval->book], 200);
        } else {
            return response()->json(['message' => 'Failed to save Book Reading Interval'], 422);
        }
    }
}

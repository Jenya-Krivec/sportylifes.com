<?php

namespace App\Http\Controllers;

use App\Models\Bookmaker;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Returns the main page of the website.
     *
     * @return View
     */
    public function create():View
    {
        // Get all active bookmakers from the database and calculate their rating and rating count
        $bookmakers = Bookmaker::selectRaw('bookmakers.*, IF(COUNT(ratings.id) = 0, 0, ROUND(SUM(ratings.rating) / COUNT(ratings.id), 1)) as rating, COUNT(ratings.id) as rating_count')
            ->leftJoin('ratings', 'bookmakers.id', '=', 'ratings.bookmaker_id')
            ->where('bookmakers.active', '=', 1)
            ->groupBy('bookmakers.id')
            ->orderBy('bookmakers.order', 'asc')
            ->get();
        foreach ($bookmakers as $bookmaker) {
            $review = Review::query()
                ->get()
                ->where('bookmaker_id', '=', $bookmaker->id)
                ->where('component', '=', 'p')
                ->toArray();
            $bookmaker['review'] = array_slice($review, 0, 2);
        }
        // Return the main page view with the bookmakers data
        return view('index', ['bookmakers' => $bookmakers]);
    }
}

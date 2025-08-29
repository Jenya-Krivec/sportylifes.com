<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmaker;
use \Illuminate\View\View;

class ReviewController extends Controller
{
    public function create(string $key): bool
    {
        return true;
    }
}

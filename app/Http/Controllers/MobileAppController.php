<?php

namespace App\Http\Controllers;

use App\Models\Bookmaker;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MobileAppController extends Controller
{
    public function create(string $key) : bool
    {
        return true;
    }
}

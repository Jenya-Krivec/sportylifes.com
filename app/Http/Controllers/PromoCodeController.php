<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\View\View;
use App\Models\Bookmaker;

class PromoCodeController extends Controller
{
    public function create(string $key) : bool
    {
        return true;
    }
}

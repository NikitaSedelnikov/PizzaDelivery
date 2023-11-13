<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasketView extends Controller
{
    public function showBasket (): mixed
    {
        return view('basket');
    }

}

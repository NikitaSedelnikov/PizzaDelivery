<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Goods;

class DeliveryView extends Controller
{
    public function index ():mixed
    {
        return view('main-page', ['goods' => Goods::all()]);
    }

    public function indexSuccess ():mixed
    {
        return view('main-page', ['goods' => Goods::all(), 'notification' => 'success']);
    }

}

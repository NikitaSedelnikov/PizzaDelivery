<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Goods;

class BasketView extends Controller
{
    public function showBasket (Request $request): mixed
    {
        $basketGoods = $request->cookie('basket');
        return view('basket', ['basket' => json_decode($basketGoods), 'goods' => Goods::all()]);
    }

}

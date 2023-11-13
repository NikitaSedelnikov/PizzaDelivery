<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order2Good;

class OrderView extends Controller
{
    public function showOrder (): mixed
    {
        return view('order-form');
    }

    public function makeOrder (Request $request): mixed
    {
        $name = $request->get('name');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $comment = $request->get("comment");
        $total = $request->get("total");
        $order = json_decode($request->get('order'));


        $user = new Order();
        $user->name = $name;
        $user->phone = $phone;
        $user->comment = $comment;
        $user->address = $address;
        $user->price = $total;
        $user->save();

        $user = Order::where('phone', '=', $phone)->where('address' , '=' , $address)->where( 'price' , '=' , $total)->get();

        foreach ($order as $item)
        {
            $order2good = new Order2Good();
            $order2good->order_id = $user[0]->id;
            $order2good->good_id = $item->id;
            $order2good->count = $item->count;
            $order2good->save();
        }
        return redirect()->route('index-success');
    }
}

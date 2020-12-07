<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use App\Models\Order;

class BeliController extends Controller
{
    //
    public function order()
    {
        $products = DB::table('products')->get();
        return view('order', compact('products'));
        // $orders = DB::table('orders')->get();
        // return view('order', compact('orders'));
    }

    public function history()
    {
        $orders = DB::table('orders')->get();
        return view('history', compact('orders'));
    }
    public function prosesorder($id)
    {
        $products = DB::table('products')->get();
        return view('prosesorder', compact('products'));
    }
    public function store(Request $request)
    {
        $order = new Order();
        $order-> = $request->buyer_name;
        $order-> = $request->buyer_contact;
        $order-> = $request->amount;
        $order-> =  $request->product_id;
        $order->save();
        return redirect()->route('history');
    }
}

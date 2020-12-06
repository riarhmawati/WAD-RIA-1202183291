<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;

class OrderController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }
    public function product()
    {
        $products = DB::table('products')->get();
        return view('product', compact('products'));
    }


    public function insert()
    {
        return view('insert');
    }

    public function storeproduct(Request $request)
    {
        $name = $request->name;
        $price = $request->price;
        $description = $request->description;
        $stock = $request->stock;
        $photo = time() . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('gambar'), $photo);
        $img_path = $request->img_path;

        $isTrue = DB::table('products')->insert([
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'stock' => $stock,
            'img_path' => $img_path,
        ]);
        if ($isTrue) {
            return redirect('product');
        }
        return redirect('insert');
    }

    public function update(Request $request, $id)
    {
        $product = product::find($id);

        $imgName = $product->img_path;
        if ($request->img_path) {
            $imgName = $request->img_path->getClientOriginalName() . '-' . time()
                . '.' . $request->img_path->extension();
            $request->img_path->move(public_path('image'), $imgName);
        }
        $product->$name = $request->name;
        $product->$price = $request->price;
        $product->$description = $request->description;
        $product->$stock = $request->stock;
        $product->$img_path = $request->img_path;
        $product->save();
        return redirect()->route('product');
    }

    //delete
    public function delete($id)
    {
        DB::table('products')
            ->where('id', $id)
            ->delete();

        return redirect('product');
    }
}

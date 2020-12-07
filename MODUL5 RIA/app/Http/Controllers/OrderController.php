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
        return view('', compact('products'));
    }


    public function insert()
    {
        return view('insert');
    }

    public function storeproduct(Request $request)
    {
        $photo = time() . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('gambar'), $photo);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->img_path = $photo;
        $product->save();

        return redirect(route('product'));
    }

    public function edit($id)
    {
        $product = Product::findorfail($id);
        return view('edit',compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findorfail($id);
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = public_path().'/gambar';
            $file->move($path, $file->getClientOriginalName());
            $filename_data = "gambar/".$file->getClientOriginalName();
        }else{
            $filename_data = $product->img_path;
        }
        // dd($request);
        $product->name = $request->product_name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->img_path = $filename_data;
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

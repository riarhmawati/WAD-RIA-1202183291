@extends('layout')

@section('content')
@if (count($products) === 0)
<div class="card-body text-center">

    <h5 class="card-title">There is no data</h5>
    <a href="{{ url('/insert') }}" class="btn btn-dark">Add Product</a>

</div>

@else
@foreach($products as $produk=> $product)
<div class="card-body text-center">
    <div class="card-columns cpl col-10">
        <div class="card">

            <div class="card-body">
                <img src="{{'gambar/' .$product->img_path }}" class="card-img-top">
                <h6 class="card-title">{{$product->name}}</h6>
                <p>{{$product->description}}</p>
                <h5>$ {{$product->price}}</h5>
            </div>
            <div class="card-footer text-right">

                <a href="{{ url('prosesorder',$product->id) }}" class="btn btn-success">Order Now</a>

            </div>
        </div>
    </div>

</div>
@endforeach
@endif
@endsection
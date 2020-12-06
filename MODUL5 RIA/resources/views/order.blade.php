@extends('layout')

@section('content')
@if (count($products) === 0)
<div class="card-body text-center">

    <h5 class="card-title">There is no data</h5>
    <a href="{{ url('/insert') }}" class="btn btn-dark">Add Product</a>

</div>

@else
<div style="display: flex; flex-direction: column">
    <h2 style="margin: 1em auto;">Order</h2>
</div>
<div class="row">
    @foreach($products as $produk=> $product)
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="{{'gambar/' .$product->img_path }}" class="card-img-top">
            <div class="card-body">

                <h6 class="card-title">{{$product->name}}</h6>
                <p class="card-text">{{$product->description}}</p>
                <h5>$ {{$product->price}}</h5>
                <a href="{{ url('prosesorder',$product->id) }}" class="btn btn-dark">Order Now</a>
            </div>
        </div>
    </div>
@endforeach
</div>
@endif
@endsection
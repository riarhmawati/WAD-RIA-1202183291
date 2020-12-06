@extends('layout')

@section('content')

@if (count($products) === 0)
<div class="card-body text-center">

<h5 class="card-title">There is no data</h5>
<a href="{{ url('/insert') }}" class="btn btn-dark">Add Product</a>

</div>

@else
<div class="card-body text-center">
        <a class="btn btn-dark btn-lg " name="submit" id="submit" href="{{ url('insert') }}" role="button">Add
            Product</a>

        <table class="table mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $produk=> $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a name="edit" class="btn btn-primary" href="{{url('edit', $product->id)}}" role="button">Edit</a>

                        <a name="delete" class="btn btn-danger" href="{{ url('delete', $product->id) }}" role="button">Delete</a>


                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endif



@endsection
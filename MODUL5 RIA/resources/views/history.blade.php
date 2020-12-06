@extends('layout')

@section('content')

@if (count($products) === 0)
<div class="card-body text-center">

<h5 class="card-title">There is no data</h5>
<a href="{{ url('/insert') }}" class="btn btn-dark">Order Now</a>

</div>

@else
<table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Product</th>
            <th scope="col">Buyer Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $key => $item)
            <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $item->product->name }}</td>
            <td>{{ $item->buyer_name }}</td>
            <td>{{ $item->buyer_contact }}</td>
            <td>{{ $item->amount }}</td>
            </form>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        @endif


@endsection
@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 center" style="background-color: whitesmoke;height: 600px;" style="padding-top: 25%;">

        </div>
        <div class="col-sm-6 center" style="background-color: whitesmoke;height: 600px;" style="padding-top: 25%;">
            <div class="card">
            <div class="row">
            <div class="col-md-6">
                
            </div>

        </div>

            </div>
        </div>
        <div class="bg-white p-3">
            <div style="display: flex; flex-direction: column">
                <h2 style="margin: 0em auto;">Buyer Information</h2>
            </div>
            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$products->id}}" name='product_id' />
                <div class="form-group">
                    <label for="buyer_name">Name</label>
                    <input type="text" class="form-control" name='buyer_name' >
                </div>
                <div class="form-group">
                    <label for="buyer_contact">Contact</label>
                    <input type="number" class="form-control" name='buyer_contact' >
                </div>
                <div class="form-group">
                    <label for="amount">Quantity</label>
                    <input type="number" class="form-control" name='amount'>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection
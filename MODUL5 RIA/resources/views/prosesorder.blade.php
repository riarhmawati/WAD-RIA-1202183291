@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 center" style="background-color: whitesmoke;height: 600px;" style="padding-top: 25%;">

        </div>
        <div class="col-sm-6 center" style="background-color: whitesmoke;height: 600px;" style="padding-top: 25%;">
            <div class="card">


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
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name='buyer_name' aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Contact</label>
                    <input type="number" class="form-control" name='buyer_contact' aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="inputZip">Quantity</label>
                    <input type="number" class="form-control" name='amount'>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection
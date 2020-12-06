@extends('layout')

@section('content')

<div class="card-body ">

    <h5 class="card-title text-center">Update Product</h5>
    <div class="container-card" style="width: 50rem;margin: auto;padding-top: 30px;">
        <div class="card">

            <div class="card-body" style="line-height: 70%;">
                <form action="{{url('update', $product->id)}}" method="post">
                    @csrf 
                    <div class="form-group">
                        <label for="nama">Product Name</label>
                        <input type="text" class="form-control" id="Nama" name="name" value="{{ $product->name }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name='description' rows="3">{{ $product->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="inputZip">Stock</label>
                        <input type="number" class="form-control" name='stock' value="{{ $product->stock }}">
                    </div>

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                        <label class="custom-file-label" for="gambar">Choose file</label>
                    </div>
        </div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-dark"> submit </button>
        </div>
        </form>
    </div>
</div>
</div>

</div>


@endsection
@extends('layout')

@section('content')

<div class="card-body ">

    <h5 class="card-title text-center">Input Product</h5>
    <div class="container-card" style="width: 50rem;margin: auto;padding-top: 30px;">
        <div class="card">

            <div class="card-body" style="line-height: 70%;">
                <form action="{{ url('storeproduct') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">

                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="Nama" name="name">

                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$ USD</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" name="price">
                        </div>

                        <div class="form-group">

                            <label for="description">Description</label>
                            <textarea class="form-control" id="Description" name="description"></textarea>

                        </div>

                        <div class="form-group">

                            <label for="stock">Stock</label>
                            <input type="text" class="form-control" id="stock" name="stock">

                        </div>
                        <div class="form-group">
                            <label for="img_path">Image file input</label>
                            <input type="file" class="form-control-file" id="img_path" name="img_path">
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
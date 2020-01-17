@extends('layouts.appbasecrud')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <h4>Add Product</h4>
    </div>
    <div class="col-sm-6 text-right">
        <a href="{{ route('list.products') }}" class="btn btn-danger mb-2">Go Back</a>
    </div>
</div>
<hr />

<form action="{{ route('add.products') }}" method="POST" name="add_product">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Image</strong>
                    <input type="file" id="file-input" name="image" multiple />
                    <span class="text-danger">{{ $errors->first('image') }}</span>

                {{-- <input type="img" name="image" class="form-control" placeholder="Update Image">
                <span class="text-danger">{{ $errors->first('image') }}</span> --}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <textarea class="form-control" col="4" name="description" placeholder="Enter Description"></textarea>
                <span class="text-danger">{{ $errors->first('description') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Category</strong>
                <select class="form-control" name="category">
                    <option value="remeras">Remeras</option>
                    <option value="pantalones">Pantalones</option>
                    <option value="buzos">Buzos</option>
                    <option value="shorts">Shorts</option>
                    <option value="camperas">Camperas</option>
				</select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Brand</strong>
                <select class="form-control" name="brand">
                <option value="adidas">Adidas</option>
                <option value="nike">Nike</option>
                <option value="puma">Puma</option>
                <option value="tommy">Tommy</option>
                </select>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Price</strong>
                <textarea class="form-control" col="4" name="price" placeholder="Enter Price"></textarea>
                <span class="text-danger">{{ $errors->first('price') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Stock</strong>
                <textarea class="form-control" col="4" name="stock" placeholder="Enter Stock"></textarea>
                <span class="text-danger">{{ $errors->first('stock') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('list.products') }}" class="btn btn-danger">Cancel</a>
        </div>
    </div>
</form>
@endsection

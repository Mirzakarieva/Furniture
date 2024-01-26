@extends('admin.layouts.layout')

@section('content')

@if ( $errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>There were some errors with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Edit</h3>
                    <a class="create__btn" href="/admin/products/index"><i class="bx bx-arrow-back"></i>Back</a>

                </div>

                <form class="create__inputs" action="/admin/products/update/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                    @csrf 
                    @method('PUT')
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control"><br>

                    <strong>Price:</strong>
                    <input type="number" name="price" value="{{ $product->price }}" class="form-control"><br>

                    <strong>Rasm:</strong>
                    <input type="file" name="image" class="form-control"><br>

                    <input type="submit" value="Qo`shish">
                </form>
            </div>
        </div>
    </main>
<!-- MAIN -->

@endsection
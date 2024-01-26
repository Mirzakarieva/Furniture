@extends('admin.layouts.layout')

@section('content')

@if ($errors->any())
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
                        <h3>Add Product</h3>
                        <a class="create_btn" href="/admin/products/index"><i class="bx bx-arrow-back"></i>Qaytish </a>


                    </div>
                    <form class="create_inputs" action="/admin/products/store" method="POST">
                        @csrf 
                        <strong> Name:</strong>
                        <input type="text" name="name" class="form-control"><br>

                        <strong> Price:</strong>
                        <input type="number" name="price" class="form-control"><br>

                        <strong> Rasm:</strong>
                        <input type="file" name="image" class="form-control"><br>

                        <input type="submit" value="Submit">

                    </form>
                </div>

            </div>
        </main>
<!-- MAIN -->

@endsection
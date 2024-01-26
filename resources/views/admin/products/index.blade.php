@extends('admin.layouts.layout')

@section('content')

<!-- MAIN -->
        <main>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Products</h3>
                        <a class="create_btn" href="/admin/products/create"><i class="bx bxs-folder-plus"></i>Create </a>


                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Num</th>
                                <th>Name:</th>
                                <th>Photo:</th>
                                <th>Price:</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($product) ==0)
                                <tr>
                                    <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
                                </tr>
                            @endif
                            @foreach ($product as $item)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td><img src="{{ $item->image }}" alt="" width="100px"></td>
                                    <td>{{ $item->price }}</td>
                                    <td>
                                        <form action="/admin/products/delete/{{ $item->id }}" method="POST">

                                        <a class="btn btn-primary" href="/admin/products/show/{{ $item->id }}"><ion-icon
                                                name="delete"></ion-icon></a>
                                        <a class="btn btn-primary" href="admin/products/edit/{{ $item->id }}"><ion-icon
                                                name="update"></ion-icon></a>

                                        @csrf 
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('O`chirmoqchimisiz?')"><ion-icon
                                            name="trash-outline"></ion-icon></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </main>
<!-- MAIN -->
@endsection   
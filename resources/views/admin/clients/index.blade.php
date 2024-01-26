@extends('admin.layouts.layout')

@section('content')

<!-- MAIN -->
        <main>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Clients</h3>
                

                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Num</th>
                                <th>Name:</th>
                                <th>E-mail:</th>
                                <th>Phone number:</th>
                                <th>Message:</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($client) ==0)
                                <tr>
                                    <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
                                </tr>
                            @endif
                            @foreach ($client as $p)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>{{ $p->number }}</td>
                                    <td>{{ $p->message }}</td>
                                    <td>
                                        <form action="/admin/clients/delete/{{ $p->id }}" method="POST">

                                        <a class="btn btn-primary" href="/admin/clients/show/{{ $p->id }}"><ion-icon
                                                name="delete"></ion-icon></a>
                                       

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
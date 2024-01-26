@extends('admin.layouts.layout')

@section('content')

<!-- MAIN -->
 <main>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show Client</h3>
                <a class="create__btn" href="/admin/clients/index"><i class="bx bx-arrow-back"></i>Qaytish </a>
            </div>
        </div>

        <div class="table-data">
            <div class="order">

                <table>
                    <tbody>
                        <tr>
                            <td>
                                <p>Name:</p>
                            </td>
                            <td>{{ $client->name }}</td>
                        </tr>

                        <tr>
                            <td>
                                <p>E-mail:</p>
                            </td>
                            <td>{{ $client->email }}</td>
                        </tr>

                        <tr>
                            <td>
                                <p>Phone number:</p>
                            </td>
                            <td>{{ $client->number }}</td>
                        </tr>

                        <tr>
                            <td>
                                <p>Message:</p>
                            </td>
                            <td>{{ $client->message }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </main>
 <!-- MAIN   -->

 @endsection
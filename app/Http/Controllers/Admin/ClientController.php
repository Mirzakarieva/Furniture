<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index(){
        $client = DB::table('contacts')->get();
        // return $client;
        return view('admin.clients.index', compact('client'));
    }

    public function create(){
        return view('admin.clients.create');
    }

    public function show($id){
        $client = DB::table('contacts')->find($id);
        return view('admin.clients.show', compact('client'));

    }

    public function delete($id){
        DB::table('contacts')->where('id', '=', $id)->delete();
        return redirect('admin/clients/index');

    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $product = DB::table('products')->get();
        // return $product;
        return view('admin.products.index', compact('product'));
    }

    public function create(){
        return view('admin.products.create');
    }

    public function store(Request $request){
        $requestData= $request->except('_token');

        DB::table('products')->insert($requestData);
        if($request->hasFile('image')){
            $file = request()->file('image');
            $fileName = time()."-".$file->getClientOriginalName();
            $file->move('files/images', $fileName);
            $requestData["image"] = $fileName;
        }
        return redirect('admin/products/index');
    }

    public function show($id){
        $product = DB::table('products')->find($id);
        return view('admin.products.show', compact('product'));

    }
    public function edit($id){
        $product = DB::table('products')->find($id);
        return view('admin.products.edit', compact('product'));

    }
    public function update(Request $request ,$id){
        DB::table('products')->where('id', '=', $id)
            ->update([
                'name'=>$request->name,
                'price'=>$request->price,
            ]);
            return redirect('admin/products/index');
    }

    public function delete($id){
        DB::table('products')->where('id', '=', $id)->delete();
        return redirect('admin/products/index');

    }
}

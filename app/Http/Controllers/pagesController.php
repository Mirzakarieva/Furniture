<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        if(isset($_GET["page"])){
            return view("pages.". $_GET["page"]);

        }else{
            return view("pages.index") ;
        }
    }   
    // public function news(){
    //     return view("pages.shop") ;
    // }   
    public function create(Request $request){
        $data =DB::table('news')->insert([
            'email'=>$request->email,
        ]);
        if($data)
            return "Success";
        
    }   
    public function contacts(Request $request){
        $data =DB::table('contacts')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'number'=>$request->number,
            'message'=>$request->message,
        ]);
        if($data)
            return "Success";
        
    }
    public function products(Request $request){
        $data =DB::table('products')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'number'=>$request->number,
            'message'=>$request->message,
        ]);
        if($data)
            return "Success";
        
    }
}

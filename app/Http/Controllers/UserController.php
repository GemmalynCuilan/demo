<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello from users';
    }
    public function show($id){
        $data=array(
            "id"=>$id,
            "name"=>"Gemm Cuilan",
            "age"=>21,
            "email"=>"gemmalyncuilan@gmail.com"
             );
         return view('user', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getAllAdmin(){
        return "All Admin is Here";
    }



    public function addAdmin(){
        return  view('admin_Add');
    }

    public function Update(){
        return view('admin_Edit');
    }
}

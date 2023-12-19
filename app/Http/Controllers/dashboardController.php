<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        return view("admin.pages.home");
    }

    public function home(){
        return view("pages.hom");
    }


    public function addProducts(){
        return view("admin.pages.add_product");
    }

    public function allProducts(){
        return view("admin.pages.all_pro");
    }

    public function category(){
        return view("admin.pages.category");
    }



}



<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{

    



    public function index(){
        $todaySales = DB::table('sales')
        ->whereDate('created_at', Carbon::today())
        ->sum('ammount');
    $yesterdaySales = DB::table('sales')
        ->whereDate('created_at', Carbon::yesterday())
        ->sum('ammount');
    $thisMonthSales = DB::table('sales')
        ->whereYear('created_at', Carbon::now()->year)
        ->whereMonth('created_at', Carbon::now()->month)
        ->sum('ammount');
        $previousMonthSales = DB::table('sales')
        ->whereYear('created_at', Carbon::now()->subMonth()->year)
        ->whereMonth('created_at', Carbon::now()->subMonth()->month)
        ->sum('ammount');

        return view("admin.pages.home", compact('todaySales', 'yesterdaySales', 'thisMonthSales', 'previousMonthSales'));
    }



    public function addProducts(){
       $categories = DB::table("category")->get();
        return view("admin.pages.add_product", compact("categories"));
    }

    public function allProducts(){
        return view("admin.pages.all_pro");
    }

    public function category(){
        return view("admin.pages.category");
    }





}



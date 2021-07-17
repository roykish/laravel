<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    
    public function index(){
        //  $tittle = "my name";
        //  $cars = [
        //     'my' => 'BMW',
        //     'his' => 'Toyota',
        //     'her' => 'Lambo'
        //  ];


        // return view('products\product', compact('cars'));

        // print_r(route('kalia'));
        return view('/products\product');
    }

    public function show($id){
        return view('products\product', compact('id'));
    }
}

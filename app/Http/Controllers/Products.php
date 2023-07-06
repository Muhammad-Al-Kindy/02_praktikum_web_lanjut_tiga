<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    public function products1(){
        return 'Halaman Marbel Edu Games';
    }
    public function products2(){
        return 'Halaman Marbel and Friends Kids Games';
    }
    public function products3(){
        return 'Halaman Riri Story Books';
    }
    public function products4(){
        return 'Halaman Kolak Kids Songs';
    }
}

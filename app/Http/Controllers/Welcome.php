<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcome extends Controller
{
    public function home(){
        return 'Halaman Selamat Datang';
    }
}
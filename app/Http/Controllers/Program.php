<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Program extends Controller
{
    public function program1(){
        return 'Halaman Karir';
    }
    public function program2(){
        return 'Halaman Magang';
    }
    public function program3(){
        return 'Halaman Kunjungan Industri';
    }
}
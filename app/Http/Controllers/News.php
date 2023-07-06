<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class News extends Controller
{
    public function news($id) {
        return "Halaman News " .$id;
    }
}
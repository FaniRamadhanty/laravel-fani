<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function tampilkan(){
    $nama = "Fani Ramadhanty";
    $umur = "17";
    return view('sample', compact('nama','umur'));
    }
}

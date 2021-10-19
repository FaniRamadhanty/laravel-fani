<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function data(){
    //mengambil semua data dari model post
    $p = Post::all();
    return view('tampil_post', compact('p'));
}
}

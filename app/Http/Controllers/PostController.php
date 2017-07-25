<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
     public function index()
    {
        return view('home');
    }
    public function post($id)
    {

        return view('post');
    }
}

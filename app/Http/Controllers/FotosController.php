<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FotosController extends Controller
{
    public function index()
    {
    	// http://laravelcoding.com/blog/laravel-5-beauty-the-10-minute-blog#07-prework
        return view('fotos');
    }
}

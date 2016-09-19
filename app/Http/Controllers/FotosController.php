<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Photo;

class FotosController extends Controller
{
    public function index()
    {

    	$photos = Photo::paginate(8);
        return view('fotos', compact('photos'));
    }
}

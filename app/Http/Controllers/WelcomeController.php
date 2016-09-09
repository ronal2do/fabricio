<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
	public function getDownload()
    {
        $file= public_path(). "/download/Fabricio-plano-de-cidade-Web.pdf";
        $headers = array(
                  'Content-Type: application/pdf',
                );
        return response()->download($file, 'Fabricio-plano-de-cidade-Web.pdf', $headers);
    }
}

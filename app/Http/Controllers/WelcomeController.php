<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
	public function getDownload()
    {
        $file= public_path(). "/download/PlanodeGoverno_Fabricio_A5-2.pdf";
        $headers = array(
                  'Content-Type: application/pdf',
                );
        return response()->download($file, 'PlanodeGoverno_Fabricio.pdf', $headers);
    }
}

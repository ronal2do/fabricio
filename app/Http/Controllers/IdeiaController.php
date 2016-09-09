<?php
namespace App\Http\Controllers;
// use Mail;
use Illuminate\Http\Request;
use Response;
use App\Http\Requests;
use App\Ideia;
use Alert;
use Illuminate\Support\Facades\Redirect;

class IdeiaController extends Controller
{
    public function store(Request $request){
    
    $input 	= $request->all();
    $nome   = $input['nome']; 
    $email  = $input['email']; 
    $ideia  = $input['ideia']; 
    $telefone   = $input['telefone']; 
    $endereco  = $input['endereco']; 
	// dd($input);
	$create = Ideia::create($input);

    Alert::success('Obrigado por compartilhar suas ideias')->persistent('Fechar');
    
	// Mail::queue('email.obrigado', [
	//  		'nome'       => $nome, 
	//  		'email'      => $email, 
	//         'ideia'      => $ideia, 
	//         'telefone'  => $telefone, 
	//         'endereco'  => $endereco
	//  	], function ($m) use ($email, $nome, $ideia, $telefone, $endereco) {
	    
	//    $m->to($email)
	//       ->cc('fabricio@fabricio40.com.br','Balneário de novas ideias')
	//       ->subject("Balneário de novas ideias");
	// });
	 
    return redirect()->back();
    return view('welcome');  
	
	}
}

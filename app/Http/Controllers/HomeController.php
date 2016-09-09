<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Agenda;
use App\User;
use App\Video;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendas = Agenda::orderBy('data')->whereRaw('data >= curdate()')->orderBy('hora')->get();

        $videos = Video::get();

        return view('home', compact('agendas', 'videos'));
    }
    public function criarAgenda(Request $request)
    {
        $dados = $request->all();
        Agenda::create($dados);
        return redirect()->back();
        return view('home');
    }
    public function deletaAgenda($id)
    {
        $c = Agenda::findOrFail($id);
        $c->delete();
        return redirect()->back();
        return view('home');       
    }

    public function criarVideo(Request $request)
    {
        $dados = $request->all();
        Video::create($dados);
        return redirect()->back();
        return view('home');
    }

    public function deletaVideo($id)
    {
        $c = Video::findOrFail($id);
        $c->delete();
        return redirect()->back();
        return view('home');       
    }

    public function getUsers()
    {
        $users = User::get();
        // $newsletters = Newsletter::get();
        return view('usuarios', compact('users'));
    }

    public function set($id)
    {
        $user = User::findOrFail($id);
        if ($user->admin == '0') {
        User::where('id', $id)
            ->update(['admin' => '1']);
        }else{
        User::where('id', $id)
            ->update(['admin' => '0']);
         }
        $user->save();  
        return redirect()->back();
        return view('usuarios');  
    }

    public function deletaUser($id)
    {
        $c = User::findOrFail($id);
        $c->delete();
        return redirect()->back();
        return view('usuarios');       
    }

}

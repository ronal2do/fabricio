<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Agenda;
use App\User;
use App\Video;
use App\Photo;

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

    public function getPhotos()
    {
        $photos = Photo::get();
        return view('photos', compact('photos'));
    }

    public function criarPhoto(Request $request)
    {
         // getting all of the post data
          $file = array('image' => $request->file('image'));
          // setting up rules
          $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
          // doing the validation, passing post data, rules and the messages

          // dd($file);
            // checking file is valid.
            if ($request->file('image')->isValid()) {
              $dados = $request->all();

              $destinationPath = 'uploads'; // upload path
              $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
              $fileName = $request->name.'.png'; // renameing image
              $request->file('image')->move($destinationPath, $fileName); // uploading file to given path

              $dados = $request->all();
                // name = $fileName

              Photo::create($dados);
              return redirect()->back();
              return view('photos');
            }
            else {

                return redirect()->back();
                return view('photos');
            }
     
    }

    public function deletaPhoto($id)
    {
        $c = Photo::findOrFail($id);
        $c->delete();
        return redirect()->back();
        return view('photos');       
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

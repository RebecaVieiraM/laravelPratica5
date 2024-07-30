<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verbete;

class DicionariosController extends Controller
{
    public function index(){
        $palavras = Verbete::get();
        return view('index')->with('palavras', $palavras);
    }
    public function create(){
        return view('formulario');
    }
    public function store(Request $req){
        $palavra1 = $req->palavra1;
        $significado1 = $req->significado1;

        $dic = new Verbete();
        $dic->palavra1 = $palavra1;
        $dic->significado1 = $significado1;
        $dic->save();

        return redirect('/dicionarios');
    }
    public function delete(Request $req){

        $verbete = Verbete::find($req->id);
        $verbete->delete();

        return redirect('/dicionarios');
    }
}

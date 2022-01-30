<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function getcontato()
    {
        return view("frontend.contato");
    }


    public function postcontato(Request $request)
    {
        Contato::insert([
            "name" => $request->nome,
            "email" => $request->email,
            "fone" => $request->fone,
            "home" => $request->home,
        ]);

        return redirect()->route('contato.backend.listcontatos');
    }

    public function getlistcontatos()
    {
        return view('backend.listcontatos', [
            'contatos'=>Contato::all()
        ]);

    }

    public function getEdit($contato_id)
    {
        return view('backend.edit', [
            'contato'=>Contato::where('id', '=', $contato_id)->first()
        ]);


    }

    public function putedit(Request $request, $contato_id)
    {
        $contato = Contato::find($contato_id);

        $contato->name=$request->nome;

        $contato->email=$request->email;

        $contato->fone=$request->fone;

        $contato->home=$request->home;

        $contato->save();

        return redirect()->route('contato.backend.listcontatos');
    }

    public function delete( $contato_id)
    {
        Contato::where('id', '=', $contato_id)->delete();

        return redirect()->route('contato.backend.listcontatos');
    }
}

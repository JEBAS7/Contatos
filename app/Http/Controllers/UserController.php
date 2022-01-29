<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getCadastro()
    {
        return view("frontend.cadastro");
    }


    public function postCadastro(Request $request)
    {
        User::insert([
            "name" => $request->nome,
            "email" => $request->email,
            "password" => "1234",
        ]);

        return json_encode(User::all());
    }

    public function getlistusers()
    {
        return view('backend.listusers', [
            'users'=>User::all()
        ]);

    }

    public function getEdit($user_id)
    {
        return view('backend.edit', [
            'user'=>User::where('id', '=', $user_id)->first()
        ]);


    }

    public function putedit(Request $request, $user_id)
    {
        $user = User::find($user_id);

        $user->name=$request->nome;

        $user->email=$request->email;

        $user->save();

        return redirect()->route('user.backend.listusers');
    }

    public function delete( $user_id)
    {
        User::where('id', '=', $user_id)->delete();

        return redirect()->route('user.backend.listusers');
    }
}

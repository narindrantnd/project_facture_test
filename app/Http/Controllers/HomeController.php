<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{


    public function about(){
        return view('home.about');
    }

    public function facturation2(){
        return view('home.facturation2');
    }

    public function recuperer(Request $req){
        // echo("test");
        $data2= $req->all();

       return view('home.recuperer', ['info2' => $data2]);
    }

    /*
    public function login()
    {
        return view('auth.login');
    }*/

    // public function register()
    // {
    //     return view('auth.register');
    // }

    // public function recuperer_user(Request $req){
    //     // dd("test");
    //     $req->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //     ]);
    //     // dd($request->all());

    //     // Créez un nouvel enregistrement dans la base de données
    //     // User::create([
    //     //     'name' => $request->input('name'),
    //     //     'email' => $request->input('email'),
    //     // ]);

    //     // Redirigez l'utilisateur vers une autre page ou affichez un message de réussite
    //     // return redirect('/dbconn')->with('success', 'Formulaire soumis avec succès!');
    //     // dd();
    // //    return view('home.recuperer', ['info2' => $data2]);
    // }


}

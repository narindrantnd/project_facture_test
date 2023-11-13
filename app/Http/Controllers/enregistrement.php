<?php

namespace App\Http\Controllers;



use App\Models\Utilisateur;

class HomeController extends Controller{
    public function enregistrerUtilisateur(Request $request){

        //Valider les données du formulaire
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:utilisateurs',
            'password' => 'required|string|min:8',
        ]);

        //Créer un nouvel utilisateur
        $utilisateur = new Utilisateur([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        //Enregistrer l'utilisateur dans la base de donnée
        $utilisateur->save();


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{


    public function about(){
        return view('home.about');
    }

    public function facturation(){
        return view('home.facturation');
    }

    public function recup(Request $req){
        // echo("test");
        $data= $req->all();

       return view('home.facturation', ['info' => $data]);
    }

    public function facturation2(){
        return view('home.facturation2');
    }

    public function recuperer(Request $req){
        // echo("test");
        $data2= $req->all();

       return view('home.recuperer', ['info2' => $data2]);
    }




}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function cita(){
        return view('cita');
    }
    public function comentarios(){
        return view('comentarios');
    }
    }


    
    /*
    public function cita(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' =>  'min:5',
            'numero' => 'required',
            'fecha' => 'required',
            'hora' => 'requied',
            'barberia' => 'required'
        ]);
        return view('cita');
    }
    public function comentarios(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' =>  'min:5',
            'numero' => 'required',
            'fecha' => 'required',
            'hora' => 'requied',
            'barberia' => 'required'
        ]);
        return view('comentarios');
    }*/
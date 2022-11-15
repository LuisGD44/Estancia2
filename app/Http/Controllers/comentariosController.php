<?php


namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use App\Models\User;
class comentariosController extends Controller
{
    public function index()
    {
      return view('comentarios');
    }
 
    public function store(Request $request)
    {
      
       $comentario = new Comentario();

        $comentario->nombre = $request->nombre;
        $comentario->email = $request->email;
        $comentario->comentario = $request->comentario;
        
        $comentario->save();
        
       return view('comentarios');
  }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
       // dd('Post...');
      // dd($request->get('name'));
      //Validacion
      $this->validate($request, [
        'name' => 'required|min:5',
        'email' => 'required|unique:users',
        'password' => 'required|min:5|confirmed'
      ]);

      User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
      ]);
      //autenticar

      auth()->attempt([
        'email' => $request->email,
        'password' => $request->password
      ]);



      return redirect()->route('post.index');
    }   
}

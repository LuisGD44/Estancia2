@extends('layouts.admin')
Pantalla de administrador 
@section('titulo')
    <div class="md:w-8/12 justify-center"> 
        <div class="flex flex-wrap justify-center">
        <img src="{{ asset('img/PowerOld.jpg')}}"class="p-1 bg-white border rounded max-w-sm"alt="..."/>
    </div>
    <br><br><br>
    <div class="d-grid gap-2">
    <a class="btn btn-primary" href="{{ route('register') }}" role="button">Agregar nuevo empleado</a>
    <a class="btn btn-primary" href="{{ route('logout') }}" role="button">Cerrar sesion</a>
    </div>
    </div>
@endsection
@extends('layouts.empleado')

@section('titulo')
<div class="md:w-8/12 justify-center"> 
            <div class="flex flex-wrap justify-center">
            <img src="{{ asset('img/PowerOld.jpg')}}"class="p-1 bg-white border rounded max-w-sm"alt="..."/>
            </div>
    </div>
    <div class="d-grid gap-2">
  <button class="btn btn-primary" type="button">cerrar sesion</button>
</div>
@endsection
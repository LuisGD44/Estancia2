@extends('layouts.app')

@section('titulo')
<div class="md:flex md:justify-center md:gap-10 md:item-center p-5" >
  <div class="md:w-8/12">
    <img src="{{ asset('img/po.jpg')}}" alt="Imagen de comentarios">
  </div>
  <div class="md:w-8/12">
<form action="{{ route('comentarios') }}" method="POST" novalidate>
@csrf
            <div>
             <label for="nombre" class="mb-2 block uppercase text-gray-500 font-bold">
                Ingresa tu nombre
            </label>
            <input id="nombre" name="nombre" type="text" placeholder="" class="border p-3 w-full">
             </div>
             <br>
             <div>
             <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
              Ingresa tu email           
             </label>
              <input id="email" name="email" type="text" placeholder="" class="border p-3 height: 50px w-full">
             </div>
             <br>
             <div>
             <label for="comentario" class="mb-2 block uppercase text-gray-500 font-bold">
                Escribe un comentario
            </label>
            <input id="comentario" name="comentario" type="text" placeholder="" class="border p-3 height: 50px w-full">
             </div>
             <br>
             <div>
             <input type="submit" onclick="alertacomentario();" value="Enviar comentario" class="bg-gray-400 hover:bg-black-500 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-withe rounded-lg"/> 
             </div>
</form>
  </div>
@endsection
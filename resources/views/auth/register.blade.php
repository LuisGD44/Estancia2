@extends('layouts.app')

@section('titulo')
 Registrar nuevo empleado
@endsection

@section ('contenido')
<div class="md:flex md:justify-center md:gap-10 md:item-center p-5" >
  <div class="md:w-8/12">
    <img src="{{ asset('img/PowerOld.jpg')}}" alt="Imagen de registro">
  </div>


  <div class="md:w-4/12">
    <form action="/crear-cuenta" method="POST">
        @csrf
        <div class="mb-5">
            <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                Nombre
            </label>
            <input id="name" name="name" type="text" placeholder="Ingreasa tu nombre" class="border p-3 w-full rounded @error('name') border-red-500 @enderror"
             value="{{old('name')}}"/>
        @error('name')
        <P class="bg-red-500 texr-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</P>
        @enderror
        </div>
        <div class="mb-5">
            <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                Email
            </label>
            <input id="email" name="email" type="text" placeholder="Ingreasa tu email" class="border p-3 w-full rounded @error('email') border-red-500 @enderror"
             value="{{old('email')}}"/>
            @error('email')
        <P class="bg-red-500 texr-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</P>
        @enderror
        </div>
        <div class="mb-5">
            <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                Contraseña
            </label>
            <input id="password" name="password" type="password" placeholder="Ingresa tu contraseña" class="border p-3 w-full rounded @error('password') border-red-500 @enderror"/>
            @error('pasword')
        <P class="bg-red-500 texr-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</P>
        @enderror
        </div>
        <div class="mb-5"> 
            <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                Repetir contraseña
            </label>
            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="repite tu contraseña" class="border p-3 w-full rounded"/>
        
        </div>
        
        <input type="submit" onclick="alertaRegistrar();" value="Crear cuenta" class="bg-blue-400 hover:bg-blue-500 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-withe rounded-lg"/> 
    </form>
  </div>
</div>

@endsection

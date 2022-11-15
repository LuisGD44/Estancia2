@extends('layouts.empleado')


@section('titulo')

<div class="md:w-8/12 " >
    <form method="POST" action="{{route('registrar')}}" novalidate>
    @csrf
    <div class="mb-5">
            <label for="servicio" class="mb-2 block uppercase text-gray-500 font-bold">
                Nombre
            </label>
            <input id="nombre" name="nombre" type="text" placeholder="Ingreasa tu nombre" class="border p-3 w-full rounded @error('email') border-red-500 @enderror"
             value="{{old('nombre')}}"/>
            @error('nombre')
        <P class="bg-red-500 texr-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</P>
        @enderror
        </div>
    <div class="mb-5">
            <label for="servicio" class="mb-2 block uppercase text-gray-500 font-bold">
                Servicio
            </label>
            <input id="servicio" name="servicio" type="text" placeholder="Ingreasa el servicio que realizaste" class="border p-3 w-full rounded @error('email') border-red-500 @enderror"
             value="{{old('servicio')}}"/>
            @error('servicio')
        <P class="bg-red-500 texr-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</P>
        @enderror
        </div>
        <div class="mb-5">
            <label for="costo" class="mb-2 block uppercase text-gray-500 font-bold">
            costo
            </label>
            <input id="costo" name="costo" type="text" placeholder="Ingreasa el servicio que realizaste" class="border p-3 w-full rounded @error('email') border-red-500 @enderror"
             value="{{old('costo')}}"/>
            @error('costo')
        <P class="bg-red-500 texr-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</P>
        @enderror
        </div>
        <div class="mb-5">
            <label for="observaciones" class="mb-2 block uppercase text-gray-500 font-bold">
            observaciones
            </label>
            <input id="comentario" name="comentario" type="text" placeholder="Ingreasa tu nombre" class="border p-3 height: 50px w-full">
        </div>
        <input type="submit" onclick="alertaCita();" value="Registrar trabajo" class="bg-blue-400 hover:bg-blue-500 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-withe rounded-lg"/> 
    </form>
</div>
@endsection
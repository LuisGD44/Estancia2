@extends('layouts.app')

@section('titulo')

<div class="md:flex md:justify-center md:gap-10 md:item-center p-5" >
  <div class="md:w-8/12">
    <img src="{{ asset('img/po.jpg')}}" alt="Imagen de registro">
  </div>

  <div class="md:w-4/12">
    <form method="POST" action="{{ route('cita') }}" novalidate>
    @csrf
  <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                Ingresa tu nombre
            </label>
            <input id="name" name="name" type="text" placeholder=" " class="border p-3 w-full rounded @error('name') border-red-500 @enderror"
             value="{{old('name')}}"/>
             <div>
             <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                Ingresa tu correo
            </label>
            <input id="email" name="email" type="text" placeholder="" class="border p-3 w-full rounded @error('email') border-red-500 @enderror"
             value="{{old('email')}}"/>
             </div>
             <div>
             <label for="numero" class="mb-2 block uppercase text-gray-500 font-bold">
                Ingresa tu numero
            </label>
            <input id="numero" name="numero" type="text" placeholder="" class="border p-3 w-full rounded @error('numero') border-red-500 @enderror"
             value="{{old('numero')}}"/>
             </div>
             <div>
             <label for="fecha" class="mb-2 block uppercase text-gray-500 font-bold">
                Ingresa la fecha
            </label>
            <input id="fecha" name="fecha" type="date" placeholder="" class="border p-3 w-full rounded @error('fehca') border-red-500 @enderror"
             value="{{old('fecha')}}"/>
             </div>
             <div>
             <label for="hora" class="mb-2 block uppercase text-gray-500 font-bold">
                Ingresa la hora
            </label>
            <input id="hora" name="hora" type="time" placeholder="" class="border p-3 w-full rounded @error('hora') border-red-500 @enderror"
             value="{{old('hora')}}"/>
             </div>
             <br>
             <div>
             <label for="empleado" class="mb-2 block uppercase text-gray-500 font-bold">
                Quieres que te atienda alguien espesifico?
            </label>
            <input id="empleado" name="empleado" type="text" placeholder="" class="border p-3 w-full rounded @error('empleado') border-red-500 @enderror"
             value="{{old('empleado')}}"/>
             </div>
             <br>
             <div>
             <select name="barberia" id="barberia" class="border p-3 w-full rounded">
              <option value="N°1005">Barberia calle zacatecas N°1005</option>
              <option value="N°715">Barberia calle zacatecas N°715</option>
             </select>
             </div>
             <br>
             <div>
             <input type="submit" onclick="alertaCita();" value="Mandar cita" class="bg-gray-400 hover:bg-black-500 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-withe rounded-lg"/> 
            </div>
  </div>
</div>
</div>
</form>
@endsection
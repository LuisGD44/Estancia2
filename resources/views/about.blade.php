@extends('layouts.app')

@section('titulo')
<section class="section bg-light">
    <div class="container py-4">
        <h2 class="h4 text-center m-8">Conocenos</h2>
        <div class="row">
            <div class="col-lg-6">
            <h2 class="text-lg font-bold text-center text-black-500 sm:text-xl">Quienes somos?</h2>
             <p class="mt-3 text-gray-600">Power Old School Barberia, es un empresa que se enfoca en el cuidado personal del hombre
            manteniendo la elegancia y el estilo de las barberias atiguas 
             </p>
            </div>
            <div class="col-lg-6">
            <img src="{{ asset('img/local.png')}}" alt="" style="width: 300px;">
            </div>
        </div>
    </div>
</section>
@endsection



@extends('layouts.admin')


@section('titulo')
<div class="container">

        <h1 class="h3 text-center">Citas de los clientes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre del cliente</th>
                    <th>Numero del cliente</th>
                    <th>Fecha de la cita</th>
                    <th>Hora de la cita</th>
                    <th>¿Quien la atendera?</th>
                    <th>Barberia</th>
                </tr>
            </thead>
            <tbody>
        @foreach($citas as $cita)
        <tr>
            <td>{{$cita->name}}</td>
            <td>{{$cita->numero}}</td>
            <td>{{$cita->fecha}}</td>
            <td>{{$cita->hora}}</td>
            <td>{{$cita->empleado}}</td>
            <td>{{$cita->barberia}}</td>
            <td>
             
            <form action="{{'delete.citaAd', $cita->id}}" method="PUT">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger" rel="tooltip">
               <i class="material-icons">Eliminar</i>
            </button>
            </form>
            </td> 
        </tr>
        @endforeach
            </tbody>
        </table>
</div>
@endsection
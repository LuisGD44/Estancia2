@extends('layouts.admin')


@section('titulo')
<div class="container">
        <h1 class="h3 text-center">Trabajo de los empleados</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre del empleado</th>
                    <th>Servicio</th>
                    <th>Costo</th>
                    <th>Observaciones</th>
                </tr>
            </thead>
            <tbody>
        @foreach($trabajos as $trabajo)
        <tr>
            <td>{{$trabajo->nombre}}</td>
            <td>{{$trabajo->servicio}}</td>
            <td>{{$trabajo->costo}}</td>
            <td>{{$trabajo->observaciones}}</td>

            <td>
            <form action="" method="PUT">
            @csrf
             @method('delete')
            <button type="submit" class="btn btn-danger" rel="tooltip">
               <i class="material-icons">Eliminar</i>
            </button>
            </td> 
            </form>
        </tr>
        @endforeach
            </tbody>
        </table>
</div>

@endsection
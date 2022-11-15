@extends('layouts.empleado')


@section('titulo')

<div class="container">
        <h1 class="h3 text-center">Comentarios de los clientes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre del cliente</th>
                    <th>Comentario</th>
                </tr>
            </thead>
            <tbody>
        @foreach($comentarios as $comentario)
        <tr>
            <td>{{$comentario->nombre}}</td>
            <td>{{$comentario->comentario}}</td>
            <td>
            <form action="{{'delete.comentario', $comentario->id}}" method="PUT">
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
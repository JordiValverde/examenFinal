@extends('layout')

@section('title')
    Elecciones 2019
@endsection

@section('name')
    <table class="table" border="3" style="background-color: lightblue">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notas as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->descripcion }}</td>
                <td>Acción</td>
                <td>
                    <a href="{{Route('notas.edit',$item->id)}}" class="btn btn-waring btn-sm">Editar</a>

                    <form action="{{route('notas.destroy',$item->id)}}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" type="submit">
                        Eliminar
                    </button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

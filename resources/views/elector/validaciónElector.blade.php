@extends('layout')

@section('title')
    Validación de Elector
@section('content')
    <h3>Ingrese su DNI para verificar si está apto para votar</h3>

    <form method="POST" action="/votacion">
        @csrf
        <input
          type="text"
          name="dni"
          placeholder="dni"
          class="form-control mb-2"
        />

        <button class="btn btn-primary btn-block" type="submit">Ingresar</button>
      </form>

@extends('layout.plantilla')

    @section('title', 'Formulario de modificación una Marca')

    @section('h1', 'Fornulario de modificación una Marca')

    @section('main')

            <div class="alert bg-light p-4">
                <form action="/modificarMarca" method="post">
                    @csrf
                    Nombre:
                    <br>
                    <input type="text" name="mkNombre" value="{{ $marca->mkNombre }}" class="form-control">
                    <input type="hidden" name="idMarca" value="{{ $marca->idMarca }}">
                    <br>
                    <button class="btn btn-dark">Agregar</button>

                </form>
            </div>

    @endsection

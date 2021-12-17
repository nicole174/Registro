@extends('plantilla')

@section('title', 'Lista de CV')
    
@section('contenido')

    <div class="fondo-admin container-fluid">
        <div class="row justify-content-end">
            <form method="POST" action="{{url('/salir')}}">
                @csrf
                <div class="salir row justify-content-end">
                    <button class="aguacate">
                        <span>
                            SALIR <i class="fas fa-sign-out-alt"></i>
                        </span>
                        <div class="liquid"></div>
                    </button>
                </div>
            </form>
        </div>
        
        <div class="row justify-content-center mt-4">
            <div class="col-md-10">
                <h1 class="titulo-cv text-center mb-4">Registros de CV:</h1>
                <table class="table table-striped table-light">
                    <thead>
                        <tr>
                            <th>NOMBRE</th>
                            <th>TELÉFONO</th>
                            <th>VACANTE</th>
                            <th>CV</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registros as $registro)
                            <tr>
                                <td>{{$registro->name}}</td>
                                <td>{{$registro->phone}}</td>
                                <td>{{$registro->vacante}}</td>
                                <td><a class="btn btn-danger" href="{{$registro->path}}" target="_blank">{{$registro->document_name}}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
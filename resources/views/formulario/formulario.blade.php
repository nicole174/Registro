@extends('plantilla')

@section('title', 'Completa tu formulario')
    
@section('contenido')

    <div class="container">
        <div class="row justify-content-end">
            <form method="POST" action="{{url('/salir')}}">
                @csrf
                <div class=" salir row justify-content-end">
                    <button class="btn-hover color-11">SALIR <i class="fas fa-sign-out-alt"></i></button>
                </div>
            </form>
        </div>
        <div class="usuarios vh-100 row justify-content-center align-items-center">
            <div class="mt-4 col-md-8">
                <div class="card form" >
                    <div class="row g-0">
                        <div class="img-user col-md-4">
                            <img src="{{url('img/GESDES.png')}}" class="img-fluid rounded-start" alt="usuarios.png">
                        </div>
                        <div class="col-md-8">
                            <div class="formulario card-body">
                                <h3 class="roboto card-title text-center">FORMULARIO</h3>
                                
                                <div class="card-body">
                                    <form method="POST" action="{{url('/usuario')}}">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input type="text" name="name" placeholder="Nombre completo..." class="pill form-control" autofocus>
                                            <label for="name" class="usuario form-label">Nombre: </label>
                                            @error('name')
                                            <div class="row justify-content-center">
                                                <div class="error error-w">
                                                    <small>
                                                        {{$message}}
                                                    </small>
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" name="phone" placeholder="Número telefónico..." class="pill form-control" autofocus>
                                            <label for="phone" class="usuario form-label">Número telefónico: </label>
                                            @error('phone') 
                                            <div class="row justify-content-center">
                                                <div class="error error-w">
                                                    <small>
                                                        {{$message}}
                                                    </small>
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" name="age" placeholder="Edad..." class="pill form-control" autofocus>
                                            <label for="age" class="usuario form-label">Edad: </label>
                                            @error('age') 
                                            <div class="row justify-content-center">
                                                <div class="error error-w">
                                                    <small>
                                                        {{$message}}
                                                    </small>
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="escolaridad" placeholder="Escolaridad..." class="pill form-control" autofocus>
                                            <label for="escolaridad" class="usuario form-label">Escolaridad:</label>
                                            @error('escolaridad') 
                                            <div class="row justify-content-center">
                                                <div class="error error-w">
                                                    <small>
                                                        {{$message}}
                                                    </small>
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="experiencia" placeholder="Experiencia..." class="pill form-control">
                                            <label for="experiencia" class="usuario form-label"> ¿Cuenta con experiencia? </label>
                                            @error('experiencia') 
                                            <div class="row justify-content-center">
                                                <div class="error error-w">
                                                    <small>
                                                        {{$message}}
                                                    </small>
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="tipo_experiencia" placeholder="Escriba su experiencia..." class="pill form-control">
                                            <label for="experiencia" class="usuario form-label"> Tipo de experiencia: </label>
                                            @error('experiencia') 
                                            <div class="row justify-content-center">
                                                <div class="error error-w">
                                                    <small>
                                                        {{$message}}
                                                    </small>
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="vacante" placeholder="Escribe su la vacante..." class="pill form-control">
                                            <label for="vacante_confirmation" class="usuario form-label"> Tipo de vacante: </label>
                                            @error('vacante') 
                                            <div class="row justify-content-center">
                                                <div class="error error-w">
                                                    <small>
                                                        {{$message}}
                                                    </small>
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="boton text-center">
                                            <div class="buttons">
                                                <button class="btn-hover color-2" type="submit">Enviar</button>
                                            </div>
                                        </div> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
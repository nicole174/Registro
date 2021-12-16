@extends('plantilla')

@section('title', 'Registros')
    
@section('contenido')

    <div class="fondo-register container-fluid ml-5">
        <div class="vh-100 row justify-content-center align-items-center">
            <div class="usuarios mt-4 col-lg-8 col-xl-6 col-md-8">
                <div class="card form" >
                    <div class="row g-0">
                        <div class="img-registro col-lg-4 col-md-4">
                            <img src="{{url('img/ges.png')}}" class="img-fluid rounded-start" alt="usuarios.png" style="border-radius: 100px">
                        </div>
                        <div class="col-md-8">
                            <div class="registro card-body">
                                <h3 class="roboto card-title text-center">REGISTRO</h3>

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
                                            <input type="text" name="email" placeholder="Correo electrónico..." class="pill form-control" autofocus>
                                            <label for="email" class="usuario form-label">Correo Electrónico:</label>
                                            @error('email') 
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
                                            <input type="password" name="password" placeholder="Contraseña..." class="pill form-control">
                                            <label for="password" class="usuario form-label"> Contraseña: </label>
                                            @error('password') 
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
                                            <input type="password" name="password_confirmation" placeholder="Escribe de nuevo la contraseña..." class="pill form-control">
                                            <label for="password_confirmation" class="usuario form-label"> Confirmar contraseña: </label>
                                            @error('password') 
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
                                                <div class="cancelar btn-hover color-7"><a href="{{url('/')}}" style="text-decoration: none; color:#fff">Cancelar</a></div>
                                                <button class="btn-hover color-8" type="submit">Registrarse</button>
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
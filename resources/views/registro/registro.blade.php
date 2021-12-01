@extends('plantilla')

@section('title', 'Registros')
    
@section('contenido')

    <div class="container ml-5">
        <div class="vh-100 row justify-content-center align-items-center">
            <div class="usuarios mt-4 col-md-8">
                <div class="card form" >
                    <div class="row g-0">
                      <div class="img-user col-md-4">
                        <img src="{{url('img/GESDES.png')}}" class="img-fluid rounded-start" alt="usuarios.png">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h3 class="roboto card-title text-center">REGISTRO</h3>

                          <div class="card-body">
                            <form method="POST" action="{{url('/usuarios')}}">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" name="name" placeholder="Nombre completo..." class="form-control" autofocus>
                                    <label for="name" class="usuario form-label">Nombre: </label>
                                    {{-- @error('name') 
                                    <div class="error">
                                        <small>
                                            {{$message}}
                                        </small>
                                    </div>
                                    @enderror --}}
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="email" placeholder="Correo electrónico..." class="form-control" autofocus>
                                    <label for="email" class="usuario form-label">Correo Electrónico:</label>
                                    {{-- @error('email') 
                                    <div class="error">
                                        <small>
                                            {{$message}}
                                        </small>
                                    </div>
                                    @enderror --}}
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" placeholder="Contraseña..." class="form-control">
                                    <label for="password" class="usuario form-label"> Contraseña: </label>
                                    {{-- @error('password') 
                                    <div class="error">
                                        <small>
                                            {{$message}}
                                        </small>
                                    </div>
                                    @enderror --}}
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password_confirmation" placeholder="Escribe de nuevo la contraseña..." class="form-control">
                                    <label for="password_confirmation" class="usuario form-label"> Confirmar contraseña: </label>
                                    {{-- @error('password') 
                                    <div class="error">
                                        <small>
                                            {{$message}}
                                        </small>
                                    </div>
                                    @enderror --}}
                                </div>
                                <div class="boton text-center">
                                    <a href="{{url('/')}}" class="btn btn-secondary">Cancelar</a>
                                    <input type="submit" value="Guardar" class="btn btn-dark">
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
    </div>

@endsection
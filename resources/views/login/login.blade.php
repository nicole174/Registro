@extends('plantilla')

@section('title', 'Login')
    
@section('contenido')

    <div class="fondo-login container-fluid">
        <div class="login-box">
            <img class="avatar" src="{{url('img/G.jpeg')}}" alt="Gesdes.jpeg">
            <h1>LOGIN</h1>
            @if (session('status'))
                <div class="acceso">
                    <p>{{session('status')}}</p>
                </div>
            @endif
            <form method="POST" action="{{url('/login')}}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" name="email"class="form-control" id="floatingInput" placeholder="name@example.com" value="{{old('email')}}" autofocus autocomplete="off">
                    <label for="floatingInput">Correo Electrónico</label>
                    @error('email') 
                        <div class="error">
                            <small>
                                {{$message}}
                            </small>
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                    <label for="floatingPassword">Contraseña</label>
                    @error('password') 
                        <div class="error">
                            <small>
                                {{$message}}
                            </small>
                        </div>
                    @enderror
                </div>
                <div class="container-fluid">
                    <div class="sesion row justify-content-center">
                        <button class="c-button c-button--gooey" type="submit"> Acceder
                            <div class="c-button__blobs">
                            <div></div>
                            <div></div>
                            <div></div>
                            </div>
                          </button>
                          <svg style="display: block; height: 0; width: 0;" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                              <filter id="goo">
                                <feGaussianBlur result="blur" stdDeviation="10" in="SourceGraphic"></feGaussianBlur>
                                <feColorMatrix result="goo" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" mode="matrix" in="blur"></feColorMatrix>
                                <feBlend in2="goo" in="SourceGraphic"></feBlend>
                              </filter>
                            </defs>
                          </svg>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="naranja row justify-content-center">
                        <a href="{{url('/registro')}}" style="text-decoration: none">
                            <div class="c-button c-button--gooey"> Registrarse
                                <div class="c-button__blobs">
                                <div></div>
                                <div></div>
                                <div></div>
                                </div>
                            </div>
                            <svg style="display: block; height: 0; width: 0;" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                <filter id="goo">
                                    <feGaussianBlur result="blur" stdDeviation="10" in="SourceGraphic"></feGaussianBlur>
                                    <feColorMatrix result="goo" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" mode="matrix" in="blur"></feColorMatrix>
                                    <feBlend in2="goo" in="SourceGraphic"></feBlend>
                                </filter>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- <div id="holder">

                    <button class="button" type="submit">
                        <p class="btnText">Iniciar Sesión</p>
                            <div class="btnTwo">
                                <p class="btnText2"><i class="fas fa-dungeon"></i></p>
                            </div>
                    </button>
                    <a href="{{url('/registro')}}" style="text-decoration: none">
                        <div class="button">
                            <p class="btnText">Registrarse</p>
                                <div class="btnTwo">
                                    <p class="btnText2"><i class="fas fa-user-plus"></i></p>
                                </div>
                        </div>
                    </a>
                </div>   --}}
            </form>
        </div>
    </div>

@endsection

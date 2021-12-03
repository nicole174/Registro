@extends('plantilla')

@section('title', 'Login')
    
@section('contenido')

    <div class="fondo-login container-fluid">
        <div class="login-box">
            <img class="avatar" src="{{url('img/G.jpeg')}}" alt="Gesdes.jpeg">
            <h1>LOGIN</h1>
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
                <div id="holder">

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
                </div>  
            </form>
        </div>
    </div>

@endsection

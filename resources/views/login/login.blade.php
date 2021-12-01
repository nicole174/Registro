@extends('plantilla')

@section('title', 'Login')
    
@section('contenido')

    <div class="container">
        <div class="login-box">
            <img class="avatar" src="{{url('img/G.jpeg')}}" alt="Gesdes.jpeg">
            <h1>LOGIN</h1>
            <form action="">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Correo Electrónico</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                    <label for="floatingPassword">Contraseña</label>
                </div>
                <div id="holder">

                    <button class="button">
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

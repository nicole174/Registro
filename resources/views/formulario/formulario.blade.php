@extends('plantilla')

@section('title', 'Completa tu formulario')
    
@section('contenido')

    <div class="fondo-form container-fluid">
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
        <div class="usuarios vh-100 row justify-content-center align-items-center">
            <div class="mt-4 col-md-8">
                <div class="card form" >
                    <div class="row g-0">
                        <div class="img-form col-md-4">
                            <img src="{{url('img/ges.png')}}" class="img-fluid rounded-start" alt="usuarios.png" style="border-radius: 100px">
                        </div>
                        <div class="col-md-8">
                            <div class="formulario card-body">
                                <h3 class="roboto card-title text-center">FORMULARIO</h3>
                                <div class="row justify-content-center">
                                    @if (session('form'))
                                    <div class="envio">
                                        <p>{{session('form')}}</p>
                                    </div>
                                @endif
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{url('/llenado')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input type="text" name="name" placeholder="Nombre completo..." class="pill form-control" autofocus value="{{old('name')}}">
                                            <label for="name" class="usuario form-label">Nombre Completo: </label>
                                            @error('name')
                                            <div class="row justify-content-center">
                                                <div class="error-f error-w">
                                                    <small>
                                                        {{$message}}
                                                    </small>
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" name="phone" placeholder="Número telefónico..." class="no-arrow pill form-control" maxlength="10" value="{{old('phone')}}">
                                            <label for="phone" class="usuario form-label">Número telefónico: </label>
                                            @error('phone') 
                                            <div class="row justify-content-center">
                                                <div class="error-f error-w">
                                                    <small>
                                                        {{$message}}
                                                    </small>
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" name="age" placeholder="Edad..." class="no-arrow pill form-control" min="1" pattern="^[0-9]+" value="{{old('age')}}">
                                            <label for="age" class="usuario form-label">Edad: </label>
                                            @error('age') 
                                            <div class="row justify-content-center">
                                                <div class="error-f error-w">
                                                    <small>
                                                        {{$message}}
                                                    </small>
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="escolaridad" placeholder="Escolaridad..." class="pill form-control" value="{{old('escolaridad')}}">
                                            <label for="escolaridad" class="usuario form-label">Escolaridad:</label>
                                            @error('escolaridad') 
                                            <div class="row justify-content-center">
                                                <div class="error-f error-w">
                                                    <small>
                                                        {{$message}}
                                                    </small>
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <div class="radio">
                                                <p>¿Cúentas con experiencia?</p>
                                                <label class="rad rad-label">
                                                    <input type="radio" class="rad-input" id="si" name="experiencia" value="si">
                                                    <div class="rad-design"></div>
                                                    <div class="rad-text">Si</div>
                                                </label>
                                                <label class="rad-label">
                                                    <input type="radio" class="rad-input" id="no" name="experiencia" value="no">
                                                    <div class="rad-design"></div>
                                                    <div class="rad-text">No</div>
                                                </label>
                                            </div>
                                            @error('experiencia') 
                                            <div class="row justify-content-center">
                                                <div class="error-f error-w">
                                                    <small>
                                                        {{$message}}
                                                    </small>
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="tipo_experiencia" id="tiene_experiencia" placeholder="Escriba su experiencia..." class="pill form-control" value="{{old('tipo_experiencia')}}">
                                            <label for="experiencia" class="usuario form-label"> Tipo de experiencia: </label>
                                            @error('experiencia') 
                                            <div class="row justify-content-center">
                                                <div class="error-f error-w">
                                                    <small>
                                                        {{$message}}
                                                    </small>
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="vacante" placeholder="Escribe la vacante..." class="pill form-control" value="{{old('vacante')}}">
                                            <label for="vacante_confirmation" class="usuario form-label"> Vacante a solicitar: </label>
                                            @error('vacante') 
                                            <div class="row justify-content-center">
                                                <div class="error-f error-w">
                                                    <small>
                                                        {{$message}}
                                                    </small>
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input type="file" name="cv" placeholder="Archivos pdf o docs..." class="pill form-control">
                                            @error('cv') 
                                            <div class="row justify-content-center">
                                                <div class="error-f error-w">
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

    <script>
       let discounted = document.getElementById('no');
       let no_discounted = document.getElementById('si')
       let discount_percentage = document.getElementById('tiene_experiencia')

        function updateStatus() {
            if (discounted.checked) {
                discount_percentage.disabled = true;
            } else {
                discount_percentage.disabled = false;
            }
        }

        discounted.addEventListener('change', updateStatus)
        no_discounted.addEventListener('change', updateStatus)

    </script>
    
@endsection
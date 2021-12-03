@extends('plantilla')

@section('title', 'Completa tu formulario')
    
@section('contenido')

    <div class="fondo-form container-fluid">
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
                        <div class="img-form col-md-4">
                            <img src="{{url('img/G.jpeg')}}" class="img-fluid rounded-start" alt="usuarios.png" style="border-radius: 100px">
                        </div>
                        <div class="col-md-8">
                            <div class="formulario card-body">
                                <h3 class="roboto card-title text-center">FORMULARIO</h3>
                                
                                <div class="card-body">
                                    <form method="POST" action="{{url('/llenado')}}">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input type="text" name="name" placeholder="Nombre completo..." class="pill form-control" autofocus>
                                            <label for="name" class="usuario form-label">Nombre: </label>
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
                                            <input type="number" name="phone" placeholder="Número telefónico..." class="no-arrow pill form-control" maxlength="10">
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
                                            <input type="number" name="age" placeholder="Edad..." class="no-arrow pill form-control" min="1" pattern="^[0-9]+">
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
                                            <input type="text" name="escolaridad" placeholder="Escolaridad..." class="pill form-control">
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
                                            <input type="text" name="tipo_experiencia" id="tiene_experiencia" placeholder="Escriba su experiencia..." class="pill form-control">
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
                                            <input type="text" name="vacante" placeholder="Escribe la vacante..." class="pill form-control">
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
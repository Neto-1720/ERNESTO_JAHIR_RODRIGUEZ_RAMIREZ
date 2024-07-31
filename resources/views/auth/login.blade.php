<!-- 
    Este es el template principal de HTML para la página de inicio de sesión y registro.
    Incluye dos formularios, uno para inicio de sesión y otro para registro, 
    así como un panel de superposición que permite a los usuarios cambiar entre los dos formularios.
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prueba de Back-end Tendencys Innovations</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />

    <!-- Estilos CSS para la página de inicio de sesión y registro.-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css'>
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
        <!-- Seccion de registro, se utiliza un include para ahorrar lines de codigo.-->    
    <section>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <h1>Registrarte</h1>
                    <span>Ingresa los Siguientes datos, para darte de alta.</span>
                    @include('auth/register')
                </form>
            </div>

              <!-- Seccion de Login, se valida el nombre y contraseña para acceder al sistema.-->   
            <div class="form-container sign-in-container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1>Iniciar Sesión</h1>
                    <br>
                    <br>
                    <span> Utiliza tus credenciales para ingresar.</span>
                    <br>
                    <br>
                    <div class="">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre:">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="Contraseña:">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit">
                        {{ __('Entrar') }}
                    </button>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                    @endif
                </form>
            </div>
              <!-- Seccion de overlays, algunas graces para agrado de los usuarios.-->   
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Ingresar</h1>
                        <p>Si ya te diste de alta, ingresa aqui. </p>
                        <button class="ghost mt-5" id="signIn">Entrar</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Crear, Cuenta!</h1>
                        <p>Si aun no tienes cuenta, ingresa aqui, para darte de alta ... </p>
                        <button class="ghost" id="signUp">Crear</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- Seccion de Js para incluir las funcionaidades y validaciones.-->   
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js'></script>
    <script src="js/login.js"></script>
</body>

</html>
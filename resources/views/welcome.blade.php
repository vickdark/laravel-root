<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <main class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7">
                        <div class="p-4 p-md-5 bg-white border rounded-4 shadow-soft text-center">
                            <span class="badge text-bg-warning text-dark mb-3">Auth listo</span>
                            <h1 class="display-5 fw-semibold mb-3">Ventas listas para despegar.</h1>
                            <p class="lead text-secondary mb-4">
                                Ingresa con tu cuenta o crea un nuevo acceso para empezar.
                            </p>
                            <div class="d-flex justify-content-center flex-wrap gap-2">
                                <a class="btn btn-brand text-white" href="{{ route('login') }}">
                                    Iniciar sesion
                                </a>
                                <a class="btn btn-outline-secondary" href="{{ route('register') }}">
                                    Crear cuenta
                                </a>
                            </div>
                        </div>
                        <div class="text-center mt-3 small text-secondary">
                            <a class="text-decoration-none" href="{{ route('password.request') }}">
                                Olvidaste tu contrasena?
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>

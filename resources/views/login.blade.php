<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="text-center">Iniciar Sesión</h3>
                        <form action="/login" method="POST">
                        @csrf
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Entrar</button>
                    </form>
                        <hr>
                        <a href="/auth/google/redirect" class="btn btn-danger w-100">Entrar con Google</a>
                        <p class="mt-3 text-center">
                            <a href="{{ route('registrar') }}">¿No tienes cuenta? Regístrate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
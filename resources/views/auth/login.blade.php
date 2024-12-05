<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login</title>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="container-login">
        <div class="row-login">
            <div class="col-login">
                <div class="card-login">
                    <div class="card-body-login">
                        <h1 class="title-login">
                            <i class="icon-login fas fa-user-circle"></i>
                        </h1>

                        <form method="POST" action="{{ route('login') }}" class="form-login">
                            @csrf

                            <div class="form-group-login">
                                <div class="input-group-login">
                                    <span class="input-icon-login">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input type="email"
                                           name="email"
                                           class="input-login @error('email') input-error-login @enderror"
                                           placeholder="Email"
                                           required
                                           autofocus>
                                </div>
                                @error('email')
                                    <span class="error-text-login">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group-login">
                                <div class="input-group-login">
                                    <span class="input-icon-login">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password"
                                           name="password"
                                           class="input-login @error('password') input-error-login @enderror"
                                           placeholder="Password"
                                           required>
                                </div>
                                @error('password')
                                    <span class="error-text-login">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="button-login">
                                <i class="button-icon-login fas fa-sign-in-alt"></i>Accedi
                            </button>

                            <div class="register-link-login">
                                <a href="{{ route('register') }}" class="link-login">
                                    Non hai un account? Registrati
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
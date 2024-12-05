<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Registrati</title>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="container-register">
        <div class="row-register">
            <div class="col-register">
                <div class="card-register">
                    <div class="card-body-register">
                        <h1 class="title-register">
                            <i class="icon-register fas fa-user-plus"></i>
                        </h1>

                        <form method="POST" action="{{ route('register') }}" class="form-register">
                            @csrf

                            <div class="form-group-register">
                                <div class="input-group-register">
                                    <span class="input-icon-register">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input type="text"
                                           name="name"
                                           class="input-register @error('name') input-error-register @enderror"
                                           placeholder="Nome"
                                           required
                                           autofocus>
                                </div>
                                @error('name')
                                    <span class="error-text-register">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group-register">
                                <div class="input-group-register">
                                    <span class="input-icon-register">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input type="email"
                                           name="email"
                                           class="input-register @error('email') input-error-register @enderror"
                                           placeholder="Email"
                                           required>
                                </div>
                                @error('email')
                                    <span class="error-text-register">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group-register">
                                <div class="input-group-register">
                                    <span class="input-icon-register">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password"
                                           name="password"
                                           class="input-register @error('password') input-error-register @enderror"
                                           placeholder="Password"
                                           required>
                                </div>
                                @error('password')
                                    <span class="error-text-register">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group-register">
                                <div class="input-group-register">
                                    <span class="input-icon-register">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password"
                                           name="password_confirmation"
                                           class="input-register"
                                           placeholder="Conferma Password"
                                           required>
                                </div>
                            </div>

                            <button type="submit" class="button-register">
                                <i class="button-icon-register fas fa-user-plus"></i>Registrati
                            </button>

                            <div class="login-link-register">
                                <a href="{{ route('login') }}" class="link-register">
                                    Hai già un account? Accedi
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
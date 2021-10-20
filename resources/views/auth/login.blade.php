<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Voe Bem | Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/fontawesome/css/font-awesome.min.css') }}"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    </head>
    <body>
        <div id="login">
            <form action="{{ route('authenticate') }}" method="POST">
                @csrf
                <label for="login_email">Email:</label><br>
                <input type="email" name="email" id="login_email"><br>
                @error('email') <small class="text-danger">{{ $message }}</small><br> @enderror
                <label for="login_password">Senha:</label><br>
                <input type="password" name="password" id="login_password"><br>
                <input type="checkbox" name="remember_token" id="remember_token"><label for="remember_token">Lembrar de mim?</label><br>
                <button>Login</button>
                Não possui uma conta?<a id="register-toggle" href="#">Cadastre-se!</a>
            </form>
        </div>
        <div id="register" style="display: none">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <label for="register_name">Nome:</label><br>
                <input type="text" name="name" id="register_name"><br>
                <label for="register_email">Email:</label><br>
                <input type="email" name="email" id="register_email"><br>
                <label for="register_password">Senha:</label><br>
                <input type="password" name="password" id="register_password"><br>
                <label for="register_confirm_password">Confirme a senha:</label><br>
                <input type="password" name="confirm_password" id="register_confirm_password"><br>
                <button>Cadastrar</button>
                Já possui uma conta?<a id="login-toggle" href="#">Faça login!</a>
            </form>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $(function () {
            $('#login-toggle').on('click', function () {
                $('#register').hide();
                $('input[name=email]').val('');
                $('input[name=password]').val('');
                $('input[name=confirm_password]').val('');

                $('#login').fadeIn();
            });

            $('#register-toggle').on('click', function () {
                
                $('#login').hide();
                $('input[name=email]').val('');
                $('input[name=password]').val('');

                $('#register').fadeIn();
            });

            @if(Session::has('form') && Session::get('form') == 'register')
                $('#register-toggle').click();
            @endif
        });
    </script>
</html>
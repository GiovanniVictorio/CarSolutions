<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Solutions</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- Script FontAwesome Kit -->
    <script src="https://kit.fontawesome.com/459acdf6c5.js" crossorigin="anonymous"></script>
    <!-- Links Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <img class="wave" src="{{ asset('images/wave.png') }}">

    <div class="container">
        <div class="img">
            <img src="{{ asset('images/car_1.svg') }}">
        </div>

        <div class="login-container">
            <form action="">
                <img class="avatar" src="{{ asset('images/logo.PNG') }}">
                <h2>Bienvenido</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Usuario</h5>
                        <input class="input" type="text">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Contraseña</h5>
                        <input class="input" type="password">
                    </div>
                </div>
                <a href="#">Eres nuevo?</a>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
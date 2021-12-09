<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/mecanico.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Car Solutions</title>
</head>
<body>
    <div class="contenido">
        <!-- Barra de navegacion -->
        <div class="navBar">
            <div class="menu">
                <h3 class="logo">Talleres<span>Mecánicos</span></h3>
                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </div>

        <!-- Contenido -->
        <div class="mainContenido">
            <header>
                <div class="overlay">
                    <div class="inner">
                        @foreach ($talleres as $taller)
                            <div class="card">
                                <div class="top-row background-top-row">
                                    <h6>{{ $taller->nombre }}</h6>
                                </div>

                                <div class="content">
                                    <h2>{{ $taller->telefono }}</h2>
                                    <p>{{ $taller->horario }}</p>
                                    <a href="https://goo.gl/maps/qHumHaoAdekf8twv7" class="button background-top-row">Google Maps</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </header>
        </div>

        <!-- Menu -->
        <div class="links">
            <ul>
                <li>
                    <a href="/mecanicos" style="--i: 0.5s;">Taller Mecánico</a>
                </li>
                <li>
                    <a href="/llanteras" style="--i: 0.1s;">Servicio de Llantera</a>
                </li>
                <li>
                    <a href="" style="--i: 0.15s;">Servicio de Cerrajeria</a>
                </li>
                <li>
                    <a href="" style="--i: 0.2s;">Taller Electrico</a>
                </li>
                <li>
                    <a href="" style="--i: 0.25s;">Servicio de Grua</a>
                </li>
                <li>
                    <a href="" style="--i: 0.3s;">Angeles Verdes</a>
                </li>
            </ul>
        </div>
    </div>

    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
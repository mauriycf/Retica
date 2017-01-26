<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Reddtica
    </title>
    <script src="js/bootstrap.js" charset="utf-8"></script>
    <link href="https://file.myfontastic.com/5E3BuKH3rGbwEhoW738v7Y/icons.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/jquery-3.1.1.min.js" charset="utf-8"></script>
    <script src="js/script.js" charset="utf-8"></script>
    <link href="css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="css/master.css" media="screen" title="no title">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>


    <!-- Para telefonos -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="barra">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
                <a style="font-size:14px;color:#fff;" class="navbar-brand" href="#">Reddtica</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="?view=index">Inicio</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Institucion <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="?view=cronograma">Cronograma</a></li>
                            <li><a href="?view=plandeestudio">Plan de estudios</a></li>
                            <li><a href="?view=requisitos">Requisitos</a></li>
                        </ul>
                    </li>
                    <li><a href="?view=ubicacion">Ubicación</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="cabecera">
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <!-- <li><a href="#">Foro</a></li> -->
                <li><a href="noticias">Noticias</a></li>
            </ul>

            <a href="/"><img src="images/logo.png" id="logo" alt=""></a>

            <ul>
                <div class="dropdown">
                    <button class="dropbtn">Institución <span class="glyphicon glyphicon-triangle-bottom"></span></button>
                    <div class="dropdown-content">
                        <a href="#">link 1</a>
                        <a href="#">link 2</a>
                        <a href="#">link 3</a>
                        <a href="#">link 4</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"> Estudios <span class="glyphicon glyphicon-triangle-bottom"></span></button>
                    <div class="dropdown-content">
                        <a href="#">link 1</a>
                        <a href="#">link 2</a>
                        <a href="#">link 3</a>
                        <a href="#">link 4</a>
                    </div>
                </div>
                <!-- <li><a href="#">Ingresar</a></li> -->
            </ul>
            <ul>
                <div class="redes-sociales">
                    <li>
                        <a class="icon-facebook" target="blank" href="https://www.facebook.com/profile.php?id=100014547347833&fref=ts"></a>
                    </li>
                    <li>
                        <a class="icon-twitter" target="blank" href="https://twitter.com/mppaptiniaula?lang=es"></a>
                    </li>
                    <li>
                        <a class="icon-instagram" target="blank" href="https://www.instagram.com/oticmatvenezuela/?hl=es"></a>
                    </li>
                </div>
            </ul>
        </nav>
    </header>

@yield('content')

<footer class="footer" id="footer">

    <div class="social">
        <a class="icon-facebook" href="https://www.facebook.com/profile.php?id=100014547347833&fref=ts" target="blank"></a>
        <a class="icon-twitter" target="blank" href="https://twitter.com/mppaptiniaula?lang=es"></a>
        <a class="icon-instagram" href="https://www.instagram.com/oticmatvenezuela/?hl=es" target="blank"></a>
    </div>
    <p class="text-muted credit">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, quam!</p>

</footer>

<script src="js/slider.js" charset="utf-8"></script>

</body>

</html>

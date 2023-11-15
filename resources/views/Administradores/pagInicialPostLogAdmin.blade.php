<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ico" href="icono1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="fuentes.css">
    <title>Página Principal</title>
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid">
                <a href="{{ url('pagInicialPostLogAdmin') }}">
                    <img src="{{ asset('Imagenes/icono1.ico') }}" alt="" style="width:50px;">
                </a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                    
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="btn btn-dark" aria-current="page" href="{{ url('modificarDatosAdmin') }}">Gestionar Información Personal </a>
                        </li>
                        <span>&nbsp;&nbsp;&nbsp;</span>
                        <li class="nav-item">
                            <a class="btn btn-dark" aria-current="page" href="{{ url('gestionarDatosUAdmin') }}">Gestionar Usuarios</a>
                        </li>
                        <span>&nbsp;&nbsp;&nbsp;</span>
                        <li class="nav-item">
                            <a class="btn btn-danger" aria-current="page" href="{{ url('pagInicial') }}">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div>
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">
                    <br>
                    <div class="card text-bg-secondary">
                        <br>
                        <h1>ÚLTIMAS NOTICIAS</h1>
                        <div class="card-body text-bg-light">
                            <h4>TORNEO DE FÚTBOL 5</h4>
                            <p>En el mes de septiembre se está realizando el torneo interno de fútbol 5, en el cual participan los estudiantes de la universidad sacando sus propios equipos.</p>
                            <img src="{{ asset('Imagenes/canchaf5.png') }}" alt="" style="width:300px;">
                        </div>
                        <div class="card-body text-bg-light">
                            <h4>CLASES DE RITMOS LATINOS</h4>
                            <p>En las sedes de Palogrande y La Nubia existe un curso de baile en donde todos los estudiantes de la universidad pueden aprender a bailar y desempeñarse de una mejor manera. Para participar, hay que inscribirse mediante el Sibu.</p>
                            <img src="baile.png" alt="" width="300px">
                        </div>
                        <div class="card-body text-bg-light">
                            <h4></h4>
                            <p></p>
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <footer class="bg-secondary">
        <div class="fuentesmain">
            <h5>Emails de los Integrantes</h5>
            <label for="">Nayeli Giraldo -->
                <a href="">esgiraldov@unal.edu.co</a>
            </label>
            <br>
            <label for="">Santiago Fernández -->
                <a href="">sfernandezga@unal.edu.co</a>
            </label>
            <br>
            <label for="">Valeria Galviz -->
                <a href="">vgalviz@unal.edu.co</a>
            </label>
        </div>
    </footer>
</body>
</html>
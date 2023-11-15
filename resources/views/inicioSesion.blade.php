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
                
                <a href="pagInicial.html">
                    <img src="{{ asset('Imagenes/icono1.ico') }}" alt="" style="width:50px;">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Iniciar Sesión</a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Registrarse</a>
                        </li> -->
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
                        <h1>INICIA SESIÓN</h1>
                        <div class="card-body text-bg-light">
                            <br>
                            <div class="row align-items-start">
                                <div class="col">
                                    <div>
                                        <label for="numdoc">Num. Doc.:
                                            <input type="text" id="numdoc" class="form-control form-control-lg" placeholder="Número de Documento">
                                        </label>
                                    </div>
                                    <br>
                                    <div>
                                        <label for="passw">Ingrese su Contraseña:
                                            <input type="password" name="" id="passw" class="form-control form-control-lg" placeholder="**********">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div>
                                <a href="registroDatos.html">¿Todavía no tienes una cuenta? Ve a registrarte</a>
                            </div>
                            <br>
                            <div class="align-items-start">
                                <button class="btn btn-success">Registrarse</button>
                                <a href="pagInicialPostLogUsu.html">PostRegistroUsu</a>
                                <a href="pagInicialPostLogAdmin.html">PostRegistroAdmin</a>
                            </div>
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
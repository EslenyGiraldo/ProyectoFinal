<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ico" href="icono1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="fuentes.css">
    <title>Modificación de Datos</title>
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid">
                <a href="pagInicialPostLogAdmin.html">
                    <img src="{{ asset('Imagenes/icono1.ico') }}" alt="" style="width:50px;">
                </a>
                
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                    
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item">
                            <a class="btn btn-dark" aria-current="page" href="">Gestionar Datos</a>
                        </li> -->
                        <!-- <span>&nbsp;&nbsp;&nbsp;</span>
                        <li class="nav-item">
                            <a class="btn btn-dark" aria-current="page" href="">Gestionar Usuarios</a>
                        </li> -->
                    </ul>
            </div>
        </nav>
    </header>
    <div>
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col">
                        <br>
                        <div class="card text-bg-secondary">
                            <br>
                            <h1>MODIFICACIÓN DE DATOS</h1>
                            <div class="card-body text-bg-light">
                                <br>
                                <div class="row align-items-start">
                                    <div class="col">
                                        <div>
                                            <label for="nombre">Nombre:
                                                <input type="text" id="nombre" name="nameU" class="form-control form-control-lg" placeholder="Nombre" required value="">
                                            </label>
                                        </div>
                                        <br>
                                        <div>
                                            <label for="apellido">Apellido:
                                                <input type="text" id="apellido" name="apellidoU" class="form-control form-control-lg" placeholder="Apellido" required value="">
                                            </label>
                                        </div>
                                        <br>
                                        <div>
                                            <label for="numcel">Número de Cédula:
                                                <input type="text" id="numcel" name="numcelU" class="form-control form-control-lg" placeholder="Número de Celular" required value="">
                                            </label>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <label for="deporte">Deporte:
                                                <select id="deporte" name="deporteU" change="" class="form-control form-control-lg" required value="">
                                                    <option value="futbol" id="1">Fútbol</option>
                                                    <option value="basquetbol" id="2">Basquetbol</option>
                                                    <option value="voleibol" id="3">Voleibol</option>
                                                    <option value="tenis" id="4">Tenis</option>
                                                    <option value="rugby" id="5">Rugby</option>
                                                    <option value="tenismesa" id="6">Tenis de Mesa</option>
                                                </select>
                                            </label>
                                        </div>
                                        <br>
                                        <div>
                                            <label for="sede">Sede:
                                                <select id="sede" name="sedeU" change="" class="form-control form-control-lg" required value="">
                                                    <option value="manizales" id="1000">Manizales</option>
                                                    <option value="palmira" id="2000">Palmira</option>
                                                    <option value="tumaco" id="3000">Tumaco</option>
                                                    <option value="bogota" id="4000">Bogotá</option>
                                                    <option value="amazonia" id="5000">Amazonía</option>
                                                    <option value="medellin" id="6000">Medellín</option>
                                                    <option value="orinoquia" id="7000">Orinoquía</option>
                                                    <option value="lapaz" id="8000">De La Paz</option>
                                                    <option value="caribe" id="9000">Caribe</option>
                                                </select>
                                            </label>
                                        </div>
                                        <br>
                                        <div>
                                            <label for="passw">Ingrese su Contraseña:
                                                <input type="password" id="passw" name="passwU" class="form-control form-control-lg" placeholder="**********" required value="">
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <br>
                                <div class="align-items-start">
                                    <button type="submit" class="btn btn-success">Actualizar</button>
                                </div>
                                <a href="pagInicialPostLogAdmin.html">Volver (Quitar luego)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
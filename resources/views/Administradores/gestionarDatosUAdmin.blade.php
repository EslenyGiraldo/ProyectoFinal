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
        <div class="container text-center">
            <table class="table table-sm mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Cédula</th>
                        <th>Celular</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Lugar de Residencia</th>
                        <th>Deporte</th>
                        <th>Género</th>
                        <th>Sede</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $author)
                        <tr>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->name }}</td>
                            <td>
                                <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Usuarios - {{count($users)}}</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Ciudad</th>
                    <th>Edad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->city}}</td>
                    <td>{{$user->age}}</td>
                </tr>
                @endforeach
            </tbody>        
        </table>
    </div>
    <button onclick="generatePDF()">Generar PDF</button>
    <button class="btn btn-primary" onclick="Grafica()" type="button">Graficar:</button>

    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

</body>
</html>
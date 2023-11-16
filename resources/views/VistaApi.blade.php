<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos de la API de Datos Abiertos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Codigo del programa</th>
                <th>Programa</th>
                <th>Semestre</th>
                <th>Genero</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $dato)
                <tr>
                    <td>{{ $dato['c_digo_programa'] }}</td>
                    <td>{{ $dato['programa'] }}</td>
                    <td>{{ $dato['semestre'] }}</td>
                    <td>{{ $dato['g_nero'] }}</td>


                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
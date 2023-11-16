<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Informe de Usuarios PDF</h1>

    <button onclick="generatePDF()">Generar PDF</button>
    <button class="btn btn-primary" onclick="Grafica()" type="button">Graficar:</button>

    <script>
        function generatePDF() {
  
            $.ajax({
                url: '/get_users',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                   
                    var doc = new jsPDF();
                    doc.text('Informe de Usuarios', 20, 20);
                    response.users.forEach(function(user, index) {
                        doc.text(`${index + 1}. Nombre: ${user.name}, Email: ${user.email}`, 20, 30 + index * 10);
                    });
                    doc.save('informe_usuarios.pdf');
                },
                error: function(error) {
                    console.error('Error al obtener datos:', error);
                }
            });
        }
    </script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

</body>
</html>
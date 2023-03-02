<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contratos</title>
</head>
<body>
    <h1>Contratos</h1>
    <table>
        <thead>
            <tr>
                <th>ID contrato</th>
                <th>ID cliente</th>
                <th>Nombre cliente</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contratos as $contrato)
                <tr>
                    <td>{{ $contrato }}</td>
                    <td>{{ $contrato->id_cliente }}</td>
                    <td>{{ $contrato->nombre_cliente }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

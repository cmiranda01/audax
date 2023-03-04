    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Contratos</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    </head>

    <body>
      <header class="bg-primary py-3 d-flex  align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
          <h1 class="text-white mb-0">Contratos</h1>
          <form method="POST" action="{{ route('logout') }}" >
            @csrf
            <button type="submit" class="btn btn-light ml-3">Cerrar sesión</button>
          </form>
        </div>
      </header>
      <main class="container py-3">
        <form class="mb-3" method="get">
          <div class="form-group">
            <label for="user_id">Filtrar por cliente:</label>
            <select class="form-control" name="user_id" id="user_id">
              <option value="">Todos los clientes</option>
              @foreach ($users as $user)
              <option value="{{ $user->id }}" {{ $user->id == request()->input('user_id') ? 'selected' : '' }}>{{ $user->name }}</option>
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>
        <table class="table table-striped table-bordered">
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
              <td>{{ $contrato->id }}</td>
              <td>{{ $contrato->id_cliente }}</td>
              <td>{{ $contrato->user['name'] }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $contratos->appends(request()->input())->links('pagination::bootstrap-4', ['elements_label' => 'Elementos', 'previous' => '&laquo;', 'next' => '&raquo;', 'showing' => 'Mostrando del :first al :last de :total resultados']) }}
      </main>
    </body>

    </html>
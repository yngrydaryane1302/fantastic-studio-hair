<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Serviço #{{ $servico->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>{{ $servico->id }} - {{ $servico->nome }}</h1>
            <h2>{{ $servico->titulo }}</h2>
            <h2>{{ $servico->valor }}</h2>
            <h2>{{ $servico->descricao }}</h2>
            <h2>{{ $servico->barba }}</h2>
            <h2>{{ $servico->cabelo }}</h2>
            <h2>{{ $servico->spa }}</h2>
            <h2>{{ $servico->manicurepedicure }}</h2>
            <h2>{{ $servico->fotos }}</h2>



            <a class="btn btn-light" href="{{ route('servicos.index') }}">Voltar a lista</a>
            <a class="btn btn-warning" href="{{ route('servicos.edit', $servico->id) }}">Editar</a>

            <form method="POST" action="{{ route('servico.destroy', $servico->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Serviço" class="btn btn-danger">
            </form>
        </div>
    </body>
</html>

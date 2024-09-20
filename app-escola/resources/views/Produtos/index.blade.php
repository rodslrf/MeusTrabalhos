<!DOCTYPE html>
<html>
<head>
    <title>lista de Produtos</title>
    <link
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>Produtos</h1>
    <a href="{{ route('produtos.create')}}">Adicionar Produtos</a>
    <ul>
        @foreach ($produtos as $produto)
        <li>{{$produto->nome}} - {{$produto->cod_produto}}
            <a href="{{route('produtos.show', $produto->id)}}">Ver</a>
            <a href="{{route('produtos.edit', $produto->id)}}">Editar</a>
            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>
</html>
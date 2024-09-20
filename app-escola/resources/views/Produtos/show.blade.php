<!DOCTYPE html>
<html>
<head>
    <title>Ver Produto</title>
    <link
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>{{ $produto->nome}}</h1>
    <p>Validade:{{$produto->validade}}</p>
    <p>Peso:{{$produto->peso}}</p>
    <p>Tamanho:{{$produto->tamanho}}</p>
    <p>Preço:{{$produto->preco}}</p>
    <p>Código do Produto:{{$produto->cod_produto}}</p>
    <a href="{{route ('produtos.index')}}">Voltar</a>
</body>
</html>
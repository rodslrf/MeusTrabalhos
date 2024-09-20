<!DOCTYPE html>
<html>

<head>
<title>Editar Produto</title>
<link
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel ="stylesheet">

<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>Editar Produto</h1>
    <form action="{{ route('produtos.update', $produto->id)}}" method="Post">
        @csrf
        @method('PUT')
        <label>Nome:</label>
        <input type='text' name="nome" value="{{ produto->nome }}" required>
        <br>
        <label>Validade:</label>
        <input type='date' name="validade" value="{{ produto->validade }}" required>
        <br>
        <label>Peso:</label>
        <input type='text' name="peso" value="{{ produto->peso }}" required>
        <br>
        <label>Tamanho:</label>
        <input type='text' name="tamanho" value="{{ produto->tamanho }}" required>
        <br>
        <label>Preço:</label>
        <input type='text' name="preco" value="{{ produto->preco }}" required>
        <br>
        <label>Código do Produto:</label>
        <input type='text' name="cod_produto" value="{{ produto->cod_produto }}" required>
        <br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
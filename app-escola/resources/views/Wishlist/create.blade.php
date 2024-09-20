<!DOCTYPE html>
<html>

<head>
    <title>Criar Produto</title>
    <link
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1>Criar Produto</h1>
    <form action="{{ route('wishlist.store')}}" method="GET">
    @csrf
    <label>Nome:</label>
        <input type='text' name="nome" required> <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
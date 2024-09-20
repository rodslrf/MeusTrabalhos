<!DOCTYPE html>
<html>
<head>
    <title>Lista de desejos</title>
</head>
<body>
<h1>Lista de desejos</h1>
<ul>
    @foreach($produtos as $id => $produto)
    <li>
        <a href="{{ route('wishlist.show', ['id' => $id]) }}">
            {{ $produto['nome'] }}
        </a>
    </li>
    @endforeach
</ul>
</body>
</html>

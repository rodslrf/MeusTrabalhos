<!DOCTYPE html>
<html>

<head>
    <title>Bem vindo a pagina inicial!</title>
</head>

<body>
    
    @foreach($patrocinios as $patrocinio)
    <li>
        Nome da empresa: {{ $patrocinio['empresa'] }}<br><br>
        Site da empresa: {{ $patrocinio['site'] }}<br><br>
        Logo da empresa: {{ $patrocinio['logo'] }}<br><br><br>
    </li>
    @endforeach
    <br>
    <a href="{{route ('paginas.detalhes')}}">Voltar para a pagina inicial</a>

</body>
</html> 
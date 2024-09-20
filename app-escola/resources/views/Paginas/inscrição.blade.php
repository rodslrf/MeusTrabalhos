<!DOCTYPE html>
<html>

<head>
    <title>Bem vindo a pagina inicial!</title>
</head>

<body>
    
    @foreach($inscrição as $inscriçãos)
    <li>
        Nome: {{ $inscriçãos['nome'] }}<br>
        Contato: {{ $inscriçãos['contato'] }}<br>
    </li>
    @endforeach
        </a><br>
    <a href="{{route ('paginas.detalhes')}}">Voltar para a pagina inicial</a>
</body>
</html>
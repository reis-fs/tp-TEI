<h1>Exibindo registros de animais</h1>
<p><a href="/animal/create">Inserir animal</a></p>
<ul>
    @foreach ($animal as $a)
    <li>
        Nome: {{$a->nome}} |
        <a href="/animal/edit/{{$animal->id}}">Editar</a>
        <a href="/animal/excluir/{{$animal->id}}">Excluir</a>
    </li>
    @endforeach
</ul>
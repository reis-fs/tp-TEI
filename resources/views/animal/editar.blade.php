<h1>Editando registro de Animal</h1>
<form action="{{$destino}}" method="POST">
    <p>
        Nome: <br>
        <input type="text" name="nome" value="{{$nome}}">
    </p>
    <p>
        Idade: <br>
        <input type="integer" name="idade" value="{{$idade}}">
    </p>
    <p>
        Especie: <br>
        <input type="text" name="especie" value="{{$especie}}">
    </p>
    <p>
        Raça: <br>
        <input type="text" name="raca" value="{{$raca}}">
    </p>
    <p>
        Tamanho: <br>
        <input type="text" name="tamanho" value="{{$tamanho}}">
    </p>
    <p>
        <input type="submit" value="Gravar">
        {{csrf_field()}}
    </p>
</form>

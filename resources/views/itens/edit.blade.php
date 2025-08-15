<h1>Editar Item</h1>
<form action="{{ route('itens.update', $iten->id) }}" method="POST">
    @csrf
    @method('PUT')
    Nome: <input type="text" name="nome" value="{{ $iten->nome }}"><br>
    Preço: <input type="text" name="preco" value="{{ $iten->preco }}"><br>
    <button type="submit">Atualizar</button>
</form>

<h1>Cadastrar Item</h1>
<form action="{{ route('itens.store') }}" method="POST">
    @csrf
    Nome: <input type="text" name="nome"><br>
    Preço: <input type="text" name="preco"><br>
    <button type="submit">Salvar</button>
</form>

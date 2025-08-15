<h1>Lista de Itens</h1>
<a href="{{ route('itens.create') }}">Novo Item</a>
<ul>
@foreach($itens as $item)
    <li>
        {{ $item->nome }} - R$ {{ $item->preco }}
        <a href="{{ route('itens.edit', $item->id) }}">Editar</a>
        <form action="{{ route('itens.destroy', $item->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </li>
@endforeach
</ul>

<h1>Lista de Categorias</h1>

<a href="{{ route('categories.create') }}">Criar nova categoria</a>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<ul>
    @foreach($categories as $category)
        <li>
            {{ $category->nome }}

            <a href="{{ route('categories.show', $category->id) }}">Ver</a>
            <a href="{{ route('categories.edit', $category->id) }}">Editar</a>

            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </li>
    @endforeach
</ul>

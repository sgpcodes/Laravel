<h1>Categoria: {{ $category->nome }}</h1>

<p><strong>Descrição:</strong> {{ $category->descricao }}</p>

<a href="{{ route('categories.index') }}">Voltar</a>

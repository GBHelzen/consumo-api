<h1> Detalhes do Artista </h1>

<p>Nome: {{ $artista->displayName }} </p>
<p>Nacionalidade: {{$artista->nationality }} </p>
<a href="{{ route('artistas.index') }}"> Voltar para a lista de artistas </a>
<h1> Detalhes da Arte </h1>

<p>Título: {{ $arte->title }} </p>
<p> <a href="{{$arte->url }}"> Link da arte </a>  </p>
<a href="{{ route('artes.index') }}"> Voltar para a lista de artes </a>
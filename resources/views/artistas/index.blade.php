<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Artistas') }}
</h2>

<ul>
    @foreach ($artistas as $artista)
        <li><a href="{{ route('artistas.show', $artista->constituentID) }}">{{ $artista->displayName }}</a></li>
    @endforeach
</ul>
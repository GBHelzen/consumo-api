<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Artes') }}
</h2>

<ul>
    @foreach ($artes as $arte)
        <li><a href="{{ route('artes.show', $arte->objectID) }}">{{ $arte->title }}</a></li>
    @endforeach
</ul>
@include ('layouts.app')

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Título da Arte
            </th>
            <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Link
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                                {{ $arte->title }} 
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            @if ($arte->url == '')
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"> Link indisponível </div>
                </td>   
            @else
                <td class="px-6 py-4 whitespace-nowrap">
                    <a href="{{$arte->url }}" class="text-sm text-blue-900" target="_blank"> {{$arte->url }} </a>
                </td>
            @endif

        </tr>

    </tbody>
</table>

<div class="px-4 py-3 bg-gray-50 text-right sm:px-6 ">
    <a href="{{ url()->previous() }}" type="button"
        class="float-left py-auto mr-4 inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Voltar
    </a>
</div>

{{-- <h1> Detalhes da Arte </h1>

<p>Título: {{ $arte->title }} </p>
<p> <a href="{{$arte->url }}"> Link da arte </a>  </p>
<a href="{{ route('artes.index') }}"> Voltar para a lista de artes </a> --}}
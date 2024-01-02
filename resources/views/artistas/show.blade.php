@include ('layouts.app')

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nome
            </th>
            <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Bio
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                                {{ $artista->displayName }} 
                            </div>
                            <div class="text-sm text-gray-500">
                                {{$artista->nationality }}
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            @if ($artista->artistBio == '')
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"> Não tem bio </div>
                </td>   
            @else
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{$artista->artistBio }} </div>
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
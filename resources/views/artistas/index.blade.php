@include ('layouts.app')

<div class="flex flex-col py-4">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="pb-8 items-center lg:flex-row  flex-col">
                <div class="grid grid-cols-3 gap-1">
                    {{-- Barra de pesquisa (filtro de artistas por nome) --}}
                    <div class="col-span-1 px-4">
                        <label for="" class="sm:text-sm text-sm font-medium text-gray-700">Nome do Artista</label>
                        <x-input wire:model="search" type="text" placeholder="Pesquise pelo artista" class="w-full sm:text-sm">
                        </x-input>
                    </div>
                </div>
            </div>
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Artistas
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($artistas as $artista)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            <a href="{{ route('artistas.show', $artista->constituentID) }}">{{ $artista->displayName }}</a>
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<br>

<div class="col-span-1 px-4"> {{ $artistas->links() }} </div>
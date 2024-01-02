<?php

namespace App\Http\Livewire\Artistas;

use App\Models\Artista;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class IndexArtistas extends Component
{   
    public $displayName;
    public $artista = null;
    public $search = '';

    public function show(Artista $artista, string|int $constituentID)
    {
        $artista = Artista::find($constituentID);
        return view ('artistas.show', compact('artista'));
    }

    public function render()
    {
        return view(
            'artistas.index',
        [
            'artistas' => Artista::where('displayName', 'ilike', '%' . $this->search . '%')
                ->orderBy('constituentID', 'desc')->paginate(5),
        ]);
    }
}
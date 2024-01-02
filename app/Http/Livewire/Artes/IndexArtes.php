<?php

namespace App\Http\Livewire\Artes;

use App\Models\Arte;
use Livewire\Component;

class IndexArtes extends Component
{   
    public $title;
    public $arte = null;
    public $search = '';

    public function show(Arte $arte, string|int $objectID)
    {
        $arte = Arte::find($objectID);
        return view ('artes.show', compact('arte'));
    }

    public function render()
    {
        return view('artes.index',
        [
            'artes' => Arte::where('title', 'ilike', '%' . $this->search . '%')
                ->orderBy('objectID', 'desc')->paginate(5),
        ]);
    }
}
<?php

namespace App\Http\Controllers\Artistas;

use App\Http\Controllers\Controller;
use App\Models\Artista;
use App\Services\MuseumofModernArt\ArtistService;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public $search = '';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artistas = Artista::all();
        return view('artistas.index',
        [
            'artistas' => Artista::where('displayName', 'ilike', '%' . $this->search . '%')
                ->orderBy('constituentID', 'asc')->paginate(5),
        ]
        );
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $x = 0;
        
        $service = new ArtistService();
        $json = $service
            ->artists()
            ->get();

            ($maxArtist = $json->count());
            
        // Salvando no banco de dados
        while ($x < $maxArtist) {
            foreach ($json[$x] as $artista) {
                $artista = new Artista;
                $artista->constituentID     = $json[$x]->constituentID;
                $artista->displayName       = $json[$x]->displayName;
                $artista->artistBio         = $json[$x]->artistBio;
                $artista->nationality       = $json[$x]->nationality;
                $artista->gender            = $json[$x]->gender;
                $artista->beginDate         = $json[$x]->beginDate;
                $artista->endDate           = $json[$x]->endDate;
                $artista->wikiQID           = $json[$x]->wikiQID;
                $artista->ULAN              = $json[$x]->ULAN;
                $artista->save();
                $x = $x + 1;
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Artista $artista, string|int $constituentID)
    {
        $artista = Artista::find($constituentID);
        return view ('artistas.show', compact('artista'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artista $artista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artista $artista)
    {
        //
    }
}

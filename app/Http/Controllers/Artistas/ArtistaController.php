<?php

namespace App\Http\Controllers\Artistas;

use App\Http\Controllers\Controller;
use App\Models\Artista;
use App\Services\MuseumofModernArt\ArtistService;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Artista::get();
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
        return Artista::find($constituentID);
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

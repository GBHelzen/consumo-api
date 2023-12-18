<?php

namespace App\Http\Controllers;

use App\Services\MuseumofModernArt\ArtistService;
use App\Services\MuseumofModernArt\ArtService;
use App\Services\MuseumofModernArt\Entities\Artist;
use App\Services\MuseumofModernArt\Endpoints\Artists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function artistas()
    {  
        $service = new ArtistService();
        // Artists
        $json = $service
            ->artists()
            ->get();

        // Busca todos os artistas
        //return $json->all();
        
        // Busca baseado no ConstituentID < 10
        dd($json->where('constituentID', '==', 7470));
    }

    public function artes()
    {
        $service = new ArtService();
        // Artworks
        $json = $service
            ->arts()
            ->get();
        
        // Busca todas as artes (cuidado, muito pesado, pode não carregar)
        //return $json->all();

        // Busca baseado no ObjectID (cuidado, muito pesado, pode não carregar)
        dd ($json->where('objectID', '==', 2));
    }
}
<?php

namespace App\Http\Controllers;

use App\Services\MuseumofModernArt\ArtistService;
use App\Services\MuseumofModernArt\Entities\Artist;
use App\Services\MuseumofModernArt\Endpoints\Artists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function __invoke()
    {  
        $service = new ArtistService();
        // Artists
        $json = $service
            ->artists()
            ->get();

        // Busca todos os artistas
        return $json->all();
        
        // Busca baseado no ConstituentID < 10
        // dd($json->where('constituentID', '<=', 10));

        // Artworks
        // return Http::get('https://media.githubusercontent.com/media/MuseumofModernArt/collection/master/Artworks.json');
    }
}
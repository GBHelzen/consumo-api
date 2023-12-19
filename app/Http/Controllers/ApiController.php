<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Services\MuseumofModernArt\ArtistService;
use App\Services\MuseumofModernArt\ArtService;
use App\Services\MuseumofModernArt\Entities\Artist;
use App\Services\MuseumofModernArt\Endpoints\Artists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public Artista $artista;
    public array $data;
    public function artistas()
    {  
        $x = 0;
        
        $service = new ArtistService();
        // Artists
        $json = $service
            ->artists()
            ->get();

        // Salvando no banco de dados
        while ($x < 15243) {
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

        // Busca todos os artistas
        return ($json->all());
        
        // Busca baseado no ConstituentID < 10
        //dd($json->where('constituentID', '==', 1));
    }

    public function artes()
    {
        $x = 0;

        $service = new ArtService();
        // Artworks
        $json = $service
            ->arts()
            ->get();
        
        // Salvando no banco de dados
        while ($x < $x) {
            $art = new Artista;
            $art->objectID          = $json[$x]->objectID;
            $art->title             = $json[$x]->title;
            $art->artist_id         = $json[$x]->artist_id;
            $art->date              = $json[$x]->date;
            $art->medium            = $json[$x]->medium;
            $art->dimensions        = $json[$x]->dimensions;
            $art->creditLine        = $json[$x]->creditLine;
            $art->acessionNumber    = $json[$x]->acessionNumber;
            $art->classification    = $json[$x]->classification;
            $art->department        = $json[$x]->department;
            $art->dateAcquired      = $json[$x]->dateAcquired;
            $art->cataloged         = $json[$x]->cataloged;
            $art->url               = $json[$x]->url;
            $art->thumbnailUrl      = $json[$x]->thumbnailUrl;
            $art->circumference     = $json[$x]->circumference;
            $art->depth             = $json[$x]->depth;
            $art->diameter          = $json[$x]->diameter;
            $art->height            = $json[$x]->height;
            $art->length            = $json[$x]->length;
            $art->weight            = $json[$x]->weight;
            $art->width             = $json[$x]->width;
            $art->seatHeight        = $json[$x]->seatHeight;
            $art->duration          = $json[$x]->duration;
            $art->save();
            $x = $x + 1;
        }
        
        // Busca todas as artes (cuidado, muito pesado, pode não carregar)
        //return $json->all();

        // Busca baseado no ObjectID (cuidado, muito pesado, pode não carregar)
        dd ($json->where('objectID', '==', 2));
    }
}
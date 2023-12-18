<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function __invoke()
    {  
       // Artists
       $response = Http::get('https://media.githubusercontent.com/media/MuseumofModernArt/collection/master/Artists.json');
       return $response;

       // Artworks
       // return Http::get('https://media.githubusercontent.com/media/MuseumofModernArt/collection/master/Artworks.json');
    }
}
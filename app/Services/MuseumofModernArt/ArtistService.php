<?php

namespace App\Services\MuseumofModernArt;

use App\Services\MuseumofModernArt\Endpoints\HasArtists;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class ArtistService
{
    use HasArtists;

    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::withHeaders([
            '',
        ]);
    }

}
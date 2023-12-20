<?php

namespace App\Services\MuseumofModernArt;

use App\Services\MuseumofModernArt\Endpoints\HasArt;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class ArtService
{
    use HasArt;

    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::connectTimeout(1200)->timeout(1200)
        ->withHeaders([
            '',
        ]);
    }

}
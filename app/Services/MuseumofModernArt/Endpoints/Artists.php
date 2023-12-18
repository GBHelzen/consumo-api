<?php

namespace App\Services\MuseumofModernArt\Endpoints;

use App\Services\MuseumofModernArt\ArtistService;
use App\Services\MuseumofModernArt\Entities\Artist;
use Illuminate\Support\Collection;

class Artists
{
    private ArtistService $service;

    public function __construct()
    {
        $this->service = new ArtistService();
    }

    public function get():Collection
    {
        return $this->transform(
            $this->service
                ->api
                ->get('https://media.githubusercontent.com/media/MuseumofModernArt/collection/master/Artists.json')
                ->json()
        );
    }

    private function transform(mixed $json):Collection
    {
        return collect($json)
            ->map(fn ($artist) => new Artist($artist));
    }
}
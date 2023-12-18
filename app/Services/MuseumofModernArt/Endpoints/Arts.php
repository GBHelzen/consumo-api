<?php

namespace App\Services\MuseumofModernArt\Endpoints;

use App\Services\MuseumofModernArt\ArtService;
use App\Services\MuseumofModernArt\Entities\Art;
use Illuminate\Support\Collection;

class Arts
{
    private ArtService $service;

    public function __construct()
    {
        $this->service = new ArtService();
    }

    public function get():Collection
    {
        return $this->transform(
            $this->service
                ->api
                ->get('https://media.githubusercontent.com/media/MuseumofModernArt/collection/master/Artworks.json')
                ->json()
        );
    }

    private function transform(mixed $json):Collection
    {
        return collect($json)
            ->map(fn ($art) => new Art($art));
    }
}
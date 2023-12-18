<?php

namespace App\Services\MuseumofModernArt\Endpoints;

trait HasArtists
{
    public function artists()
    {
        return new Artists();
    }
}
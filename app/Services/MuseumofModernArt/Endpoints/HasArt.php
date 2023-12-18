<?php

namespace App\Services\MuseumofModernArt\Endpoints;

trait HasArt
{
    public function arts()
    {
        return new Arts();
    }
}
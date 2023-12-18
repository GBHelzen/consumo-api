<?php

namespace App\Services\MuseumofModernArt\Entities;

class Artist
{
    public int $constituentID;
    public string $displayName;
    public string|null $artistBio;
    public string|null $nationality;
    public string|null $gender;
    public string $beginDate;
    public string $endDate;
    public string|null $wikiQID;
    public int|null $ULAN;

    public function __construct(array $data)
    {
        $this->constituentID    = data_get($data, 'ConstituentID');
        $this->displayName      = data_get($data, 'DisplayName');
        $this->artistBio        = data_get($data, 'ArtistBio');
        $this->nationality      = data_get($data, 'Nationality');
        $this->gender           = data_get($data, 'Gender');
        $this->beginDate        = data_get($data, 'BeginDate');
        $this->endDate          = data_get($data, 'EndDate');
        $this->wikiQID          = data_get($data, 'Wiki QID');
        $this->ULAN             = data_get($data, 'ULAN');
    }

}
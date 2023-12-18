<?php

namespace App\Services\MuseumofModernArt\Entities;

class Art
{
    public string $title;
    public string $artist;
    public int $constituentID;
    public string|null $artistBio;
    public string|null $nationality;
    public string $beginDate;
    public string $endDate;
    public string|null $gender;
    public string $date;
    public string|null $medium;
    public string|null $dimensions;
    public string $creditLine;
    public string $acessionNumber;
    public string $classification;
    public string $department;
    public string $dateAcquired;
    public string $cataloged;
    public int $objectID;
    public string|null $url;
    public string|null $thumbnailUrl;
    public float $circumference;
    public float $depth;
    public float $diameter;
    public float $height;
    public float $length;
    public float $weight;
    public float $width;
    public float $seatHeight;
    public int $duration;

    public function __construct(array $data)
    {
        $this->title            = data_get($data, 'Title');
        $this->artist           = data_get($data, 'Artist');
        $this->constituentID    = data_get($data, 'ConstituentID');
        $this->artistBio        = data_get($data, 'ArtistBio');
        $this->nationality      = data_get($data, 'Nationality');
        $this->beginDate        = data_get($data, 'BeginDate');
        $this->endDate          = data_get($data, 'EndDate');
        $this->gender           = data_get($data, 'Gender');
        $this->date             = data_get($data, 'Date');
        $this->medium           = data_get($data, 'Medium');
        $this->dimensions       = data_get($data, 'Dimensions');
        $this->creditLine       = data_get($data, 'CreditLine');
        $this->acessionNumber   = data_get($data, 'AcessionNumber');
        $this->classification   = data_get($data, 'Classification');
        $this->department       = data_get($data, 'Department');
        $this->dateAcquired     = data_get($data, 'DateAcquired');
        $this->cataloged        = data_get($data, 'Cataloged');
        $this->objectID         = data_get($data, 'ObjectID');
        $this->url              = data_get($data, 'URL');
        $this->thumbnailUrl     = data_get($data, 'ThumbnailURL');
        $this->circumference    = data_get($data, 'Circumference (cm)');
        $this->depth            = data_get($data, 'Depth (cm)');
        $this->diameter         = data_get($data, 'Diameter (cm)');
        $this->height           = data_get($data, 'Height (cm)');
        $this->length           = data_get($data, 'Length (cm)');
        $this->weight           = data_get($data, 'Weight (kg)');
        $this->width            = data_get($data, 'Width (cm)');
        $this->seatHeight       = data_get($data, 'Seat Height (cm)');
        $this->duration         = data_get($data, 'Duration (sec.)');
    }

}
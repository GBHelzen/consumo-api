<?php

namespace App\Services\MuseumofModernArt\Entities;

class Art
{
    public int $objectID;
    public string $title;
    public int|array $artist_id;
    public string|null $date;
    public string|null $medium;
    public string|null $dimensions;
    public string|null $creditLine;
    public string $accessionNumber;
    public string|null $classification;
    public string $department;
    public string|null $dateAcquired;
    public string $cataloged;
    public string|null $url;
    public string|null $thumbnailUrl;
    public float|null $circumference;
    public float|null $depth;
    public float|null $diameter;
    public float|null $height;
    public float|null $length;
    public float|null $weight;
    public float|null $width;
    public float|null $seatHeight;
    public int|null $duration;
    public function __construct(array $data)
    {
        $this->title            = data_get($data, 'Title');
        $this->artist_id        = data_get($data, 'ConstituentID');
        $this->date             = data_get($data, 'Date');
        $this->medium           = data_get($data, 'Medium');
        $this->dimensions       = data_get($data, 'Dimensions');
        $this->creditLine       = data_get($data, 'CreditLine');
        $this->accessionNumber  = data_get($data, 'AccessionNumber');
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
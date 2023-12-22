<?php

namespace App\Http\Controllers\Artes;

use App\Http\Controllers\Controller;
use App\Models\Arte;
use App\Services\MuseumofModernArt\ArtService;
use Illuminate\Http\Request;

class ArteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Arte::get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $x = 0;
        
        $service = new ArtService();
        // Artworks
        $json = $service
        ->arts()
        ->get();
        
        $maxArt = $json->count();

        // Salvando no banco de dados
        while ($x < $maxArt) {
            foreach($json[$x] as $arte) {
                $arte = new Arte;
                $arte->objectID          = $json[$x]->objectID;
                $arte->title             = $json[$x]->title;
                $arte->constituentID     = implode(', ', $json[$x]->constituentID);
                $arte->date              = $json[$x]->date;
                $arte->medium            = $json[$x]->medium;
                $arte->dimensions        = $json[$x]->dimensions;
                $arte->creditLine        = $json[$x]->creditLine;
                $arte->accessionNumber   = $json[$x]->accessionNumber;
                $arte->classification    = $json[$x]->classification;
                $arte->department        = $json[$x]->department;
                $arte->dateAcquired      = $json[$x]->dateAcquired;
                $arte->cataloged         = $json[$x]->cataloged;
                $arte->url               = $json[$x]->url;
                $arte->thumbnailUrl      = $json[$x]->thumbnailUrl;
                $arte->circumference     = $json[$x]->circumference;
                $arte->depth             = $json[$x]->depth;
                $arte->diameter          = $json[$x]->diameter;
                $arte->height            = $json[$x]->height;
                $arte->length            = $json[$x]->length;
                $arte->weight            = $json[$x]->weight;
                $arte->width             = $json[$x]->width;
                $arte->seatHeight        = $json[$x]->seatHeight;
                $arte->duration          = $json[$x]->duration;
                $arte->save();

                foreach($json[$x]->constituentID as $constituentID)
                {
                    $arte->artistas()->attach($constituentID);
                }
                $x = $x + 1;
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Arte $arte, string|int $objectID)
    {
        return Arte::find($objectID);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Arte $arte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Arte $arte)
    {
        //
    }
}

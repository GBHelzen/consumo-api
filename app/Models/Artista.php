<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artista extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'constituentID';
    protected $guarded = [];

    protected function artes(): BelongsToMany
    {
        return $this->belongsToMany(Arte::class, 'arte_artista', 'constituentID', 'objectID');
    }
}

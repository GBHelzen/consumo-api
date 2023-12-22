<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Arte extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'objectID';
    
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'artist_id' => 'integer'
    ];

    protected $guarded = [];

    public function artistas(): BelongsToMany
    {
        return $this->belongsToMany(Artista::class);
    }
}

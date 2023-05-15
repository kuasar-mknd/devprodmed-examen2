<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Morceau extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'duree',
        'genre_id',
    ];

    public function artistes()
    {
        return $this->belongsToMany(Artiste::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}

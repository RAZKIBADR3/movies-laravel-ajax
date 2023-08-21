<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    protected $fillable = [
        'username',
        'description',
        'id_movie'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'id_movie');
    }

    use HasFactory;
}

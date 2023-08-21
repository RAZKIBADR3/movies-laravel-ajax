<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function saves()
    {
        return $this->hasMany(Save::class, 'id_movie');
    }

    use HasFactory;
}

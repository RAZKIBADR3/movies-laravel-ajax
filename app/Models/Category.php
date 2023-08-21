<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public function movies()
    {
        return $this->hasMany(Movie::class, 'id_category');
    }

    use HasFactory;
}

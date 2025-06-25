<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galery extends Model
{
    /** @use HasFactory<\Database\Factories\GaleryFactory> */
    use HasFactory;

    protected $table = 'gallery';

    protected $fillable = [
        'Id',
        'image',
        'url',
        'created_at',
        'updated_at',
    ];
}

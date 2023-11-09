<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'name',
        'slug',
        'title',
        'short_description',
        'long_description',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

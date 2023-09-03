<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'content',
        'link',
        'link_text',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}

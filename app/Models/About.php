<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class About extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public $translatable = [
        'heading',
        'title',
        'subtitle',
        'content',
    ];

    protected $table = 'about';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'heading',
        'title',
        'subtitle',
        'content',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
}

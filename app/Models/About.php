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
        'title',
        'section1',
        'section2',
        'section3',
        'box1_title',
        'box1',
        'box2_title',
        'box2',
        'box3_title',
        'box3',
        'box4_title',
        'box4',
    ];

    protected $table = 'about';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'section1',
        'section2',
        'section3',
        'box1_title',
        'box1',
        'box2_title',
        'box2',
        'box3_title',
        'box3',
        'box4_title',
        'box4',
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

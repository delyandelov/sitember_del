<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class CMS extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public $translatable = [
        'title',
        'body',
    ];

    protected $table = 'cms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'body',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ServicesPage extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'services_pages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'seo_title',
        'seo_description',
        'page_title',
    ];
}

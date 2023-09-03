<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slogan',
        'intro',
        'section_title1',
        'section_title2',
        'short_info2',
        'section_title3',
        'short_info3',
        'section_title4',
        'section_title5',
        'short_info5',
    ];
}

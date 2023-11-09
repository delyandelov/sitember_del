<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'homes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'services_title',
        'aboutus_title',
        'aboutus_content',
        'aboutus_button_text',
        'projects_title',
        'projects_button_text',
        'other_button_text',
        'join_content',
        'testimonials_title',
        'askus_title',
        'askus_content',
    ];
}

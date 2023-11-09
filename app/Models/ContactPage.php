<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    use HasFactory;

    protected $table = 'contact_pages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'heading',
        'title',
        'form_heading',
        'form_content',
    ];
}

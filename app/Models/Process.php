<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;

    protected $table = 'processes';

    protected $fillable = [
        'process_title',
        'process_phases',
    ];

    protected $casts = [
        'process_phases' => 'array',
    ];
}

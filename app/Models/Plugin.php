<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'version',
        'description',
        'file_path',
        'is_enabled',
        'user_id',
    ];

    protected $casts = [
        'is_enabled' => 'boolean',
    ];
}
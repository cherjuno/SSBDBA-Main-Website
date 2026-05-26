<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'peoples';
    protected $fillable = ['name', 'degree', 'position', 'bio', 'email', 'photo', 'order'];
}

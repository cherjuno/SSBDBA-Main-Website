<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchProposal extends Model
{
    protected $fillable = ['researcher_name', 'researcher_email', 'title', 'description', 'status'];
}

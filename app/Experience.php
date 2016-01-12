<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
      'company',
      'year_start',
      'year_end',
      'job_title',
      'description',
      'resume_id',
      
    ];
}

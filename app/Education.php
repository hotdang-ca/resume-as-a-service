<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';
    protected $fillable = [
      'year',
      'title',
      'facility',
      'description',
      'resume_id',

    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
      'phone',
      'email',
      'twitter',
      'facebook',
      'skype',
      'linkedin',
      'googleplus',
      'resume_id',
      
    ];
}

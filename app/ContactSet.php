<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSet extends Model
{
    protected $table = 'contactsets';
    
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

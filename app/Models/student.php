<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
     protected $fillable = [
     	'pin',
        'addmission_no',
        'class',
        'session',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'birth_date',
        'religion',
        'mobile_no',
        'email',
        'photo',
        'education_level',
        'graduate',
        'parental_status',
        'tribe',
      
      'marital_status',
'place_origin',
'current_residence',
'no_children',

        'designation',
        'gurdian_name',
        'relationship',
        'guardian_mobile',
        'status',
        'user_id'
    ];
}

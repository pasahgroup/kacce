<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supply extends Model
{
    use HasFactory;
      protected $fillable = [
        'supply_name',
        'phone',
        'email',
        'location',
        'tin',
         'vrn',    
         'status',
        'user_id'
    ];
}

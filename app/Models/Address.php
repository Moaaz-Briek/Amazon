<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'addr1',
      'addr2',
      'country',
      'city',
      'postcode',
    ];
}

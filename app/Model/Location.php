<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    Protected $fillable = ['latitude','longitude','address'];
}

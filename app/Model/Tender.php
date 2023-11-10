<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    Protected $fillable = ['title','publish_date','status','last_date','attachment'];
}

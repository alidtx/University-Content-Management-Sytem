<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = "alumnies";
    protected $fillable = ['title','subtitle','image'];
}

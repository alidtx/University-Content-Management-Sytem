<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HallHome extends Model
{


    public function hall()
    {
        return $this->belongsTo(Hall::class, 'hall_id', 'id');
    }
  



}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class, 'id', 'id');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{

    public function member()
    {
        return $this->belongsTo(Member::class, 'provost', 'id');
    }


}

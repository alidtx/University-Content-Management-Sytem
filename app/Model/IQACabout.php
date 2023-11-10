<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class IQACabout extends Model
{

    public function member()
    {
        return $this->belongsTo(Member::class, 'id', 'id');
    }

}

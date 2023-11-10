<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HallMember extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class,'member_id','id');
    }

    public function hall()
    {
        return $this->belongsTo(Hall::class,'hall_id','id');
    }

}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Member;

class TrainingWorkShopSeminar extends Model
{

    public function member()
    {
        return $this->belongsTo(Member::class, 'facilator', 'id');
    }



}

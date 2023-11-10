<?php

namespace App\Model;
use App\Model\Member;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class, 'id', 'id');
    }
}

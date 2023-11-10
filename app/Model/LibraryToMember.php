<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LibraryToMember extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }
}

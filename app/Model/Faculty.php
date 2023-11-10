<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class, 'faculty_head', 'id');
    }

    public function getImageAttribute($value)
    {
        return $value?('/public/storage/media/faculty/'.$value) : null;
    }
}


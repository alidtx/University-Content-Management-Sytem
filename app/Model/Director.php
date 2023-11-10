<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Member;

class Director extends Model
{
    Protected $fillable = ['pernonnel_id','title_first_part','title_second_part','short_description','long_description'];

    public function pernonnel_info()
    {
        return $this->belongsTo(Member::class, 'pernonnel_id', 'id');
    }
}

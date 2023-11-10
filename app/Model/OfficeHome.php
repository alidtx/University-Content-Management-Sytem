<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OfficeHome extends Model
{

    public function office()
    {
        return $this->belongsTo(Office::class, 'office_id', 'id');
    }


}

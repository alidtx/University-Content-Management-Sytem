<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class, 'office_head', 'id');
    }
    public function slider()
    {
        return $this->hasMany(Slider::class, 'slider_master_id', 'slider_master_id');
    }

}

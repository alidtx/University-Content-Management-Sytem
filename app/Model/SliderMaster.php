<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SliderMaster extends Model
{
    Protected $fillable = ['name','animation_type'];

    public function slider()
    {
        return $this->hasMany(Slider::class, 'slider_master_id', 'id');
    }

}

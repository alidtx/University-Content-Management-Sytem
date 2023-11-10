<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OurLibrary extends Model
{
    Protected $fillable = ['title','description','image','sort_order'];

    public function member()
    {
        return $this->belongsTo(Member::class, 'library_head', 'id');
    }
    public function slider()
    {
        return $this->hasMany(Slider::class, 'slider_master_id', 'slider_master_id');
    }
}

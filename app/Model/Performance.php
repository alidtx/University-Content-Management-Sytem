<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Performance extends Model
{
   use SoftDeletes;

   Protected $fillable = ['title','image','status','sort_order', 'self_id', 'link','description'];

   protected $dates = ['deleted_at'];


    public function children()
    {
        return $this->hasMany(Performance::class, 'self_id');
    }

    public function parent()
    {
        return $this->belongsTo(Performance::class, 'self_id');
    }

   public function annualreport()
   {
     return $this->hasMany('App\Model\Annualreport');
   }
}
